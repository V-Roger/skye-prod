---
title: 'Post Prod audio'
taxonomy:
    category:
        - feature
    pagetype:
        - feature
spotlight:
    headline: 'Post prod audio'
    image: images/DSC03957.jpg
    blurb: 'Que ce soit pour de la publicité, du doublage ou du sound design, vous méritez une qualité sonore à la hauteur de vos attentes. Pour se faire Skye Prod s’engage et vous propose toutes les techniques de traitement sonore, mixage et mastering qui vous correspond. Compression, EQ, reverb, delay... Skye Prod met tout en œuvre pour rendre votre création unique par sa technicité et sa qualité.'
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

Que ce soit pour de la publicité, du doublage ou du sound design, vous méritez une qualité sonore à la hauteur de vos attentes. Pour se faire Skye Prod s’engage et vous propose toutes les techniques de traitement sonore, mixage et mastering qui vous correspond. Compression, EQ, reverb, delay... Skye Prod met tout en œuvre pour rendre votre création unique par sa technicité et sa qualité.

<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/344374231?color=e44c65&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/344318691?color=e44c65&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>