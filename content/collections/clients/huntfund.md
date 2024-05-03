---
id: c0aa89ae-00da-4800-bd51-7c83cc139395
blueprint: client
title: HuntFund
big_statement: 'Fintech MVP'
about:
  -
    type: paragraph
    attrs:
      class: null
    content:
      -
        type: text
        text: 'Fintech startup HuntFund was created to provide savings and banking services to the outdoor industry.  HuntFund is the brainchild of long-term financial industry and outdoor enthusiast Jeff Bynum, '
  -
    type: paragraph
    attrs:
      class: null
    content:
      -
        type: text
        text: 'HuntFund is focused on building a sustainable, smart fintech app to help customers with their finances.'
  -
    type: paragraph
    attrs:
      class: null
    content:
      -
        type: text
        text: 'The long-term vision for HuntFund is a full suite of financial solutions, from AI-driven auto-savings and financial analysis to credit/debit cards, deep insights, and education.'
result:
  -
    type: paragraph
    attrs:
      class: null
    content:
      -
        type: text
        text: 'This project focused on developing a minimally viable product (MVP) for HuntFund to support its fundraising goals.  This build included two separate pieces:  a Laravel API/Backend and a React Native mobile application. '
  -
    type: paragraph
    attrs:
      class: null
    content:
      -
        type: text
        text: The
      -
        type: text
        marks:
          -
            type: link
            attrs:
              href: 'statamic://entry::0c623e4f-08d3-4367-9592-ab966a7a23cf'
              rel: null
              target: null
              title: 'Laravel Development'
        text: ' Laravel API'
      -
        type: text
        text: '/Backend was built to be flexible for growth and serve as the backend to the mobile app.  The backend build included integrating with several third-party APIs. These included:'
  -
    type: bulletList
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: Plaid
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: SolidFi
      -
        type: listItem
        content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: Twilio
  -
    type: paragraph
    attrs:
      class: null
    content:
      -
        type: text
        text: "The Ravenna team selected each integration because of its quality, scalability, and fit with HuntFund's long-term strategy.   "
  -
    type: paragraph
    attrs:
      class: null
    content:
      -
        type: text
        text: "Plaid was the first integration selection made.  The Ravenna team has implemented with Plaid multiple times, so it was a natural selection when building out a fintech solution.   HuntFund is leveraging the Auth product up front, but the roadmap includes usage of Plaids: Balance, Signal, Transactions, and more.  The Plaid suite of products will allow for strong monitoring of customers' financial reality. "
  -
    type: paragraph
    attrs:
      class: null
    content:
      -
        type: text
        text: "SolidFi was selected as the banking as a service (BaaS) provider.  As an autosaving app, first and foremost, each time a person starts saving, those funds need to go somewhere.  SolidFi's BaaS solution is a great fit for a fintech startup.  With SolidFi's Plaid integration, the Ravenna team connected external accounts securely with a customer's autosaving account and created a straightforward auto-saving setup."
  -
    type: paragraph
    attrs:
      class: null
    content:
      -
        type: text
        text: 'Twilio is another third-party provider that Ravenna has used multiple times. The existing integration is leveraging outbound SMS for notifications, sending the user reminders, congratulations, and other account-based notifications.'
  -
    type: paragraph
    attrs:
      class: null
    content:
      -
        type: text
        text: 'Each of these integrations provides a unique solution while offering additional products that will allow HuntFund to scale. '
  -
    type: paragraph
    attrs:
      class: null
    content:
      -
        type: text
        text: 'The HuntFund '
      -
        type: text
        marks:
          -
            type: link
            attrs:
              href: 'statamic://entry::00e42ad3-97e6-4fbd-ba62-a21a077e0370'
              rel: null
              target: null
              title: null
        text: 'mobile app is built on React Native'
      -
        type: text
        text: '.  This selection was made so that the app could largely have a single codebase supporting Android and iOS. The mobile application utilizes the Laravel API/Backend '
  -
    type: paragraph
    attrs:
      class: null
one_image: false
apis_integrated:
  - Plaid
  - 'Solid Fi'
  - Twilio
  - Persona
seo:
  title: 'Bsepoke Laravel and React Native Fintech MVP'
  description: 'Ravenna built a fintech MVP for Huntfund using Laravel and React Native'
  image: '@seo:social_share_image'
updated_by: 1d1068ab-208d-480d-a677-dda65fe0f490
updated_at: 1714749183
logo: hunt-fund-final-cut-white.webp
gallery:
  - huntfund-1.webp
  - huntfund-2.webp
  - huntfund-3.webp
square_logo: false
quote:
  -
    type: paragraph
    attrs:
      class: null
    content:
      -
        type: text
        text: "I had the pleasure of collaborating with Ravenna Interactive and their performance was outstanding throughout our project. Demonstrating a deep understanding of fintech solutions, Ravenna Interactive showcased remarkable technical proficiency, consistently exceeding expectations. Their collaborative and transparent communication style fostered a seamless working relationship, and they showcased a genuine commitment to the project's success. The solution delivered not only met but surpassed our requirements, integrating innovative features that added substantial value."
quote_author: 'Jeff Bynum / HuntFund Founder'
---
