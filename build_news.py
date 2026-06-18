#!/usr/bin/env python3
"""Haber sayfalarını tek kaynaktan üretir.

Veri:      news-data.json            (haber listesi: key, tarih, görsel, sayfa adı)
Metinler:  languages/tr.json + en.json  (başlık: <key>, özet: <key>-sub, uzun içerik: <key>-content)
Şablonlar: templates/news-detail.html   (detay sayfası)
           templates/news-card.html     (liste kartı)

Çıktı:     news/<sayfa>.html  (tüm detay sayfaları)
           index.html         (en yeni 6 haber kartı)
           news.html          (tüm haber kartları)

Yeni haber eklemek için:
  1. languages/tr.json ve en.json dosyalarına <key>, <key>-sub (ve tarih) metinlerini ekle
  2. news-data.json listesinin BAŞINA yeni kaydı ekle
  3. python3 build_news.py
"""

import json

HOME_CARD_COUNT = 6


def render(template, item, tr):
    key = item["key"]
    title = tr[key]
    sub = tr[key + "-sub"]
    out = template
    out = out.replace("{{SUB}}", sub)
    out = out.replace("{{DESC}}", sub.replace('"', "&quot;")[:155])
    out = out.replace("{{TITLE}}", title)
    out = out.replace("{{PAGE}}", item["page"])
    out = out.replace("{{KEY}}", key)
    out = out.replace("{{DATE_KEY}}", item["date"])
    out = out.replace("{{DATE_TXT}}", tr[item["date"]])
    out = out.replace("{{IMAGE}}", item["image"])
    if item.get("content"):
        block = (
            '<div class="article-body" data-lang="%s-content">%s</div>\n          '
            % (key, tr[key + "-content"])
        )
    else:
        block = ""
    out = out.replace("{{CONTENT_BLOCK}}", block)
    return out


def replace_grid(path, cards_html):
    html = open(path).read()
    open_tag = '<div class="news-grid">'
    close_tag = "\n        </div>"
    start = html.index(open_tag) + len(open_tag)
    end = html.index(close_tag, start)
    html = html[:start] + "\n" + cards_html + html[end:]
    open(path, "w").write(html)


def main():
    data = json.load(open("news-data.json"))
    tr = json.load(open("languages/tr.json"))
    detail_tpl = open("templates/news-detail.html").read()
    card_tpl = open("templates/news-card.html").read()

    for item in data:
        open("news/" + item["page"], "w").write(render(detail_tpl, item, tr))
    print("%d detay sayfası üretildi (news/)" % len(data))

    cards = [render(card_tpl, item, tr) for item in data]
    replace_grid("index.html", "\n".join(cards[:HOME_CARD_COUNT]))
    replace_grid("news.html", "\n".join(cards))
    print(
        "index.html (%d kart) ve news.html (%d kart) güncellendi"
        % (HOME_CARD_COUNT, len(cards))
    )


if __name__ == "__main__":
    main()
