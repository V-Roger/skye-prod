---
title: 'E-Learning / Museographie / Toys'
taxonomy:
    category:
        - feature
    pagetype:
        - feature
spotlight:
    headline: 'E-Learning  / Museographie / Toys'
    blurb: 'Grâce à sa polyvalence, Skye Prod reste votre meilleur allié quand le besoin d’une voix se fait sentir. Utilisée de manière adaptée et personnalisée l''utilisation de la voix couvre un vaste spectre de demande. Que ce soit dans le milieu des formations professionnelles, ou plus simplement de l’apprentissage à travers les jouets ou la muséographie, nous avons la voix indispensable à la bonne réussite de votre projet.'
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

Grâce à sa polyvalence, Skye Prod reste votre meilleur allié quand le besoin d’une voix se fait
sentir. Utilisée de manière adaptée et personnalisée, l'utilisation de la voix couvre un vaste spectre de demande. Que ce soit dans le milieu des formations professionnelles, ou plus simplement de l’apprentissage à travers les jouets ou la muséographie, nous avons la voix indispensable à la bonne réussite de votre projet.

