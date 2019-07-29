---
title: Radio
taxonomy:
    category:
        - feature
    pagetype:
        - feature
spotlight:
    headline: Radio
    blurb: 'Créé par Apple en 2005, le podcast touche aujourd''hui plus de 39% des Français grâce à sa flexibilité. Skye Prod vous propose de créer vos podcasts, jingles, audios brandings, thèmes musicaux, pour que vous puissiez communiquer différemment sur votre entreprise, tout en gagnant en notoriété.'
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

Créé par Apple en 2005, le podcast touche aujourd'hui plus de 39% des Français grâce à sa flexibilité. Skye Prod vous propose de créer vos podcasts, jingles, audios brandings, thèmes musicaux, pour que vous puissiez communiquer différemment sur votre entreprise, tout en gagnant en notoriété.

<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/641762406&color=%23e44c65&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/641762892&color=%23e44c65&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/641762469&color=%23e44c65&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/641762469&color=%23e44c65&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>