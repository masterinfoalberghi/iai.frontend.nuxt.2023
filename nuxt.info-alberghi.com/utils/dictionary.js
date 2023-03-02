let parseStringByLang = (text, locale) => {
    
    if (text == undefined) {
        return "";

    } else if ( text[locale] != undefined ) {
        return text[locale]

    } else if ( text["*"] != undefined) {
        return text["*"]

    } else {
        return text;
        
    }

}
    

export {
    parseStringByLang
}