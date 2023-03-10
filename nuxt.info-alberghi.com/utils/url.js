let getLangByUrl = (url) => {
    
    let locale = "it";
    if (url.startsWith("/ing/") || url.startsWith("/en/")) { locale = "en"; }
    if (url.startsWith("/fr/") ) { locale = "fr"; }
    if (url.startsWith("/ted/") || url.startsWith("/de/")) { locale = "de"; }

    return locale;

}

let getUrlByLang = (locale) => {

    if (locale == "it") { return "/"; }
    return "/" + locale + "/";     

}

export {
    getLangByUrl,
    getUrlByLang
}