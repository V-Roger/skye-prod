---
title: 'Phone / Messaging'
taxonomy:
    category:
        - feature
    pagetype:
        - feature
spotlight:
    headline: 'Phone / Messaging'
    image: images/DSC03961.jpg
    blurb: 'Skye Prod vous permet de créer vos messages téléphoniques professionnels et exonérés de tout droits SACEM. Une façon simple et rapide d’accueillir ses clients de manière personnalisée et efficace. Grâce à notre service de création sur mesure, rédaction des messages (différentes langues) et création d’identité sonore, nous mettons tout en œuvre pour la voix qu’il faut à l’image de votre entreprise.'
    button:
        text: 'En savoir plus'
sidebars:
    portals:
        -
            path: /dummy/amet
            button_text: Commander
form:
    name: contact
    fields:
        name:
            label: Vous
            placeholder: 'Votre nom'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        email:
            label: 'Votre email'
            placeholder: sounds@skye-prod.com
            autocomplete: 'on'
            type: email
            validate:
                required: true
        message:
            label: 'Votre message'
            placeholder: 'Bonjour,'
            type: textarea
            classes: full-width
            validate:
                required: true
    buttons:
        submit:
            type: submit
            value: 'C''est parti !'
    process:
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: '{% include ''forms/data.txt.twig'' %}'
        email:
            subject: '[Site Contact Form] {{ form.value.name|e }}'
            body: '{% include ''forms/data.html.twig'' %}'
        message: 'Merci !'
---

Skye Prod vous permet de créer vos messages téléphoniques professionnels et exonérés de tout droits SACEM. Une façon simple et rapide d’accueillir ses clients de manière personnalisée et efficace. Grâce à notre service de création sur mesure, rédaction des messages (différentes langues) et création d’identité sonore, nous mettons tout en œuvre pour la voix qu’il faut à l’image de votre entreprise.
