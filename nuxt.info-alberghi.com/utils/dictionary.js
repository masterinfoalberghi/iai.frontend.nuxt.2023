

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

const write = (key) => {

    const dictionary = useState("dictionary")
    
    if (!dictionary.value) {
        return "nodictionary";

    } else {

        let label = dictionary.value.find(obj => { return obj.key === key });
        if (label) {
            return label.value
        }
        return "nokey: " + key;
    }
}

/** Discorsive */

const privacyPolicy = (dictionary, link) => {
    return write("privacy:intro", dictionary) +  ' <a target="_blank" class="link-form-inline" href="' + link + '">' + write("privacy:link", dictionary) + '</a>' + write("privacy:after", dictionary);
    return "";
}

export {
    parseStringByLang,
    write,
    privacyPolicy
}