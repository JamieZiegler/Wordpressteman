// Gemensam kontext för alla scheman baserat på schema.org
const commonContext = {
    "@context": "https://schema.org"
};

// Schema för startsidan 
const hemSchema = {
    "@type": "WebPage",
    "headline": "Hem - James Ziegler",
    "description": "Denna webbplats fungerar som portfolio för James Ziegler"
};

// Schema för artikelsidan
const artiklarSchema = {
    "@type": "CollectionPage",
    "headline": "Artiklar - James Ziegler",
    "description": "Här finner du en samling artiklar på ämen inom webb, design och skapande."
};

// Schema för presentationssidan
const presentationSchema = {
    "@type": "Person",
    "name": "James Ziegler",
    "url": "localhost/wordpress/presentation",
    "description": "Här kan du läsa mer om James Ziegler"
};

// Schema för CV-sidan
const cvSchema = {
    "@type": "Person",
    "name": "James Ziegler",
    "url": "localhopst/wordpress/cv",
    "jobTitle": "Student",
    "worksFor": {
    "@type": "LocalBusiness",
    "name": "James Ziegler"
    },
    "alumniOf": {
    "@type": "Komvux",
    "name": "Hermods"
    }
};

// Schema för gallerisidan
const galleriSchema = {
    "@type": "WebPage",
    "headline": "Galleri - James Ziegler",
    "description": "Här hittar du gallerier av mina verk"
};

// Schema för galleriet för digitalt skapande 1
const digitaltSkapande1Schema = {
    "@type": "CreativeWork",
    "headline": "Digitalt skapande 1 - James Ziegler",
    "description": "Detta är en samling av mina skapelser i kursen Digitalt skapande 1"
};

// Schema för galleriet för digitalt skapande 2
const digitaltSkapande2Schema = {
    "@type": "CreativeWork",
    "headline": "Digitalt skapande 2 - James Ziegler",
    "description": "Detta är en samling av mina skapelser i kursen Digitalt skapande 1"
};

// Schema för sidan tidigare projekt
const tidigareProjektSchema = {
    "@type": "WebPage",
    "headline": "Tidigare Projekt - James Ziegler",
    "description": "På denna sida samlas mina större projekt"
};

// Schema för sidan webbutveckling 1
const webbutveckling1Schema = {
    "@type": "CreativeWork",
    "headline": "Webbutveckling 1 - James Ziegler",
    "description": "Här kan du läsa mer om min första webbplats"
};

// Schema för kontaktsidan
const kontaktSchema = {
    "@type": "LocalBusiness",
    "name": "James Ziegler",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Vägen 1",
        "addressLocality": "Staden",
        "postalCode": "123 45",
        "addressCountry": "Sverige"
    },
    "telephone": "0701234567",
    "email": "info@mailadress.se",
    "url": "localhost/wordpress"
};

//Schema för tacksidan
const tackSchema = {
    "@type": "WebPage",
    "headline": "Tack - James Ziegler",
    "description": "Landningssida för inskickat formulär"
};

const allSchemas = [commonContext, hemSchema, artiklarSchema, presentationSchema,cvSchema, galleriSchema, digitaltSkapande1Schema, digitaltSkapande2Schema, tidigareProjektSchema, webbutveckling1Schema, kontaktSchema, tackSchema];

console.log(JSON.stringify(allSchemas, null, 2));

