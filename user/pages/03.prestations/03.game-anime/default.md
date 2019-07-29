---
title: 'Game / Anime'
taxonomy:
    category:
        - feature
    pagetype:
        - feature
spotlight:
    headline: 'Game / Anime'
    blurb: 'Motion capture, gaming, dessin animé, manipulation d’objets, images de synthèse 2D/3D, la liste des techniques employées dans la production d’animation se fait de plus en plus vaste chaque jour. Afin de répondre à cette demande croissante, Skye Prod propose tout un ensemble de services adaptés, innovants et personnalisés, allant du simple habillage sonore, à des prestations complètes multi voix, design sonore, création musicale, mixage et mastering, répondant ainsi au mieux à vos attentes.'
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

Motion capture, gaming, dessin animé, manipulation d’objets, images de synthèse 2D/3D, la liste des techniques employées dans la production d’animation se fait de plus en plus vaste chaque jour. Afin de répondre à cette demande croissante, Skye Prod propose tout un ensemble de services adaptés, innovants et personnalisés, allant du simple habillage sonore, à des prestations complètes multi voix, design sonore, création musicale, mixage et mastering, répondant ainsi au mieux à vos attentes.

<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/347713230?color=e44c65&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/344311944?color=e44c65&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>