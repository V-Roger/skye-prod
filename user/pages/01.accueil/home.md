---
title: Accueil.
visible: true
banner:
    headline: 'Skye prod'
    background_image: spirale.png
    quips:
        - 'CREATION SONORE'
intro:
    headline: 'DES REALISATIONS SONORES POUR TOUS VOS PROJETS'
    hero_image: DSC03865site.jpg
features:
    items:
        '@taxonomy.pagetype': feature
    order:
        by: default
signup:
    headline: Contact
    form:
        target: 'mailto:roger.virgil@gmail.com'
        placeholder: 'Adresse email'
        button_text: 'C''est parti'

key_points:
    headline: 'Ils nous ont fait confiance'
    items:
        - image: scanair@2x.png
          # target: '#'
        - image: Readiktion@2x.png
          # target: '#'
        - image: trevouxsite@2x.png
          # target: '#'
        - image: overdrive@2x.png
          # target: '#'
        - image: logo_nutrakk.png
          # target: '#'
form:
    name: contact

    fields:
        name:
          label: Vous
          placeholder: Votre nom
          autocomplete: on
          type: text
          validate:
            required: true
        email:
          label: Votre email
          placeholder: sounds@skye-prod.com
          autocomplete: on
          type: email
          validate:
            required: true

        message:
          label: Votre message
          placeholder: Bonjour, 
          type: textarea
          classes: full-width
          validate:
            required: true

    buttons:
        submit:
          type: submit
          value: C'est parti !

    process:
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        email:
            subject: "[Site Contact Form] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        message: Merci !
        display: thankyou
---
