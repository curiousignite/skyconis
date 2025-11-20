const darkMode = getCookie("darkMode");
function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 3) return parts[1];
  else return parts.pop().split(";").shift();
}
if (darkMode == "true") {
  document.querySelector(".switch__input").checked = true;
  DarkReader.setFetchMethod(window.fetch);
  DarkReader.enable();
} else {
  document.querySelector(".switch__input").checked = false;
  DarkReader.disable();
}
const checkbox = document.querySelector(".switch__input");
checkbox.addEventListener("change", function () {
  if (this.checked) {
    DarkReader.setFetchMethod(window.fetch);
    DarkReader.enable();
    document.cookie = "darkMode=true;";
  } else {
    DarkReader.disable();
    document.cookie = "darkMode=false";
  }
});

// Language

// Function to fetch language data
async function fetchLanguageData(lang) {
  const response = await fetch(`languages/${lang}.json`);
  return response.json();
}

// Function to set the language preference
function setLanguagePreference(lang) {
  localStorage.setItem("language", lang);
  document.documentElement.lang = lang;
  // location.reload();
}

// Function to update content based on selected language
function updateContent(langData) {
  document.querySelectorAll("[data-lang]").forEach((element) => {
    const key = element.getAttribute("data-lang");
    if (element.tagName === "INPUT" && key === "placeholder_text") {
      element.placeholder = langData[key];
    } else {
      element.innerHTML = langData[key];
    }
  });
}

// Function to change language
async function changeLanguage(lang) {
  document.documentElement.lang = lang;
  setLanguagePreference(lang);
  const langData = await fetchLanguageData(lang);
  updateContent(langData);
}

// Call updateContent() on page load
window.addEventListener("DOMContentLoaded", async () => {
  const userPreferredLanguage =
    localStorage.getItem("language") || navigator.language;
  const language = document.querySelector("#language-toggle");
  document.documentElement.lang = userPreferredLanguage;
  if (userPreferredLanguage === "en") {
    language.checked = false;
  } else if (userPreferredLanguage === "tr") {
    language.checked = true;
  }

  const langData = await fetchLanguageData(userPreferredLanguage);
  updateContent(langData);
});

const language = document.querySelector("#language-toggle");
language.addEventListener("change", () => {
  if (language.checked) {
    changeLanguage("tr");
  } else {
    changeLanguage("en");
  }
});
