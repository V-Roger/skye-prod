---
title: Doublage
taxonomy:
    category:
        - feature
    pagetype:
        - feature
spotlight:
    headline: Doublage
    image: images/DSC03973site.jpg
    blurb: 'Que ce soit pour vos fictions, publicités ou encore séries, Skye Prod à la voix qu’il vous faut ! Grâce à son catalogue de plus d’une centaine de comédiens professionnels, ses 2 studios, et ses offres de voix et de traitement sonore, Skye Prod réalise vos projets vocaux sur mesure ainsi que leur habillage pour des prestations complètes et qualitatives.'
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

Que ce soit pour vos fictions, publicités ou encore séries, Skye Prod à la voix qu’il vous faut ! Grâce à son catalogue de plus d’une centaine de comédiens professionnels, ses 2 studios, et ses offres de voix et de traitement sonore, Skye Prod réalise vos projets vocaux sur mesure ainsi que leur habillage pour des prestations complètes et qualitatives.

<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/346210953?color=e44c65&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/347713230?color=e44c65&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/641762991&color=%23e44c65&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/346211898?color=e44c65&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/641762892&color=%23e44c65&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/641762469&color=%23e44c65&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>