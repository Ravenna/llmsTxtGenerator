---
id: f3a42808-eeb3-4522-b43f-8daa89305006
blueprint: article
title: 'How to budget for web and mobile application development outside of dev costs?'
categories:
  - project-planning
tags:
  - costs
  - budgeting
  - laravel
seo:
  title: 'How to budget for web and mobile application development'
  description: 'Building a Laravel web app, mobile app, or both can be daunting. One problem we have noticed is that often all the thinking when developing an application goes into the application itself. There needs to be more planning for long-term costs and resourcing'
updated_by: 1d1068ab-208d-480d-a677-dda65fe0f490
updated_at: 1668529375
photo_by: 'https://www.pexels.com/photo/computer-c-code-276452/'
photo_by_text: 'Photo by Pixabay'
background_image: how-to-budget-for-web-and-mobile-application-development-outside-of-actual-dev-costs-1668027939.jpg
content:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Building a Laravel web app, mobile app, or both can be daunting. Architecture, strategy, planning, resources, testing, and delivery should be a part of the project. One problem we have noticed is that often all the thinking when developing an application goes into the application itself. There needs to be more planning for long-term costs and resourcing. Some areas that would be good to consider are:'
  -
    type: bullet_list
    content:
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Platform fees'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Hosting/cloud fees'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Subscription API fees '
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Patching coss'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Maintenance and expansion'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'These areas, and more, can contribute to the long-term costs of owning this application. Even though it may be a low priority when planning the project, stakeholders, product owners, or relevant staff should spend time on this topic. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: "Let's break down how some of these costs can add up. "
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Starting with platform fees is simple. One recent project we built includes the following:'
  -
    type: bullet_list
    content:
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'AWS hosting '
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Mailgun '
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Stripe '
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Plaid '
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Coinbase '
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Google Drive '
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'And more'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'While each of these is likely not a huge cost, it can add up. Also, some of these services can get expensive depending on the user count, server load, or general site traffic. '
  -
    type: paragraph
    content:
      -
        type: text
        text: 'One example of where costs can increase significantly is in AWS hosting fees. AWS is affordable at the outset, but traffic or application usage increases can push those costs up quickly. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'The next area of costs to consider is maintenance and patching'
      -
        type: text
        text: '. '
  -
    type: paragraph
    content:
      -
        type: text
        text: 'We generally consider maintenance to be random bugs or small feature changes. As user counts grow or users become increasingly diverse, you may find outlier issues that were unaddressed during the initial development of your web or mobile application. '
  -
    type: paragraph
    content:
      -
        type: text
        text: "One example of this challenge is: let's say all of your users are in the US. You are happily rolling along, and your application is doing great. But then someone signs up from Europe. How are you going to transact with the Euro? Do you have enough privacy built-in for GDPR laws? These are simple examples of how unplanned changes in the user base can contribute to a change that needs to happen. Depending on your Laravel application's build, you may need a simple fix to handle payment processing internationally. We would consider it a new feature if it is a significant development effort. "
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Patching is usually related to the libraries your application uses. Maybe a vulnerability was found in one of them. There may be a new version of PHP, or iOS/Android put out a new version. Sometimes these new versions can create breaking changes, and other times it is a simple update that works just fine with your codebase.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Patching is usually straightforward, but it is something to consider because you want to avoid a vulnerability or something breaking. One of the most important things to consider is "who is keeping an eye out?" if a library releases an update. What if an iOS update is released? Who reads the update notes to ensure there is no impact on your mobile application, or if there is an impact, what is the process to identify it and resolve it promptly?'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'What about new features and expanding?'
  -
    type: paragraph
    content:
      -
        type: text
        text: "So we built your Laravel and mobile apps, and it's been six months. Now all of your users are asking for this one specific feature. Or your product owner or a stakeholder has something they want to add."
  -
    type: paragraph
    content:
      -
        type: text
        text: 'New features are part of any long-term software application plan. The requests come in from all sides, and it is essential to consider a few things: '
  -
    type: bullet_list
    content:
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Will this feature make more money because more users will come? '
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Could we upcharge for this feature? '
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'What is the cost of implementing this feature? '
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Will this feature require any additional staffing or support?'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The knowledge that features will be needed down the road can help keep your budget in a good place.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Does your application require staff? '
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Some applications offer live chat, while others require someone to respond to support emails, approve users, or handle a process. The time cost for people to deal with software application support is something to be considered when budgeting for the project.'
  -
    type: paragraph
    content:
      -
        type: text
        text: "These costs can even creep up when you don't expect them. One example is a client we had that ran a web application connected to a mobile app. One of the company employees had to do a small weekly task that took a couple of hours. Upon review, we found that resolving the issue would only take a simple code change."
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Staff costs for web applications are often minimal if the platform is well-written. But keeping an eye on things never hurts.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'In closing'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Building Laravel web applications and mobile apps that rely on the web can be a great process. But, awareness of long-term costs and budgeting considerations can help save the bottom line later.'
---
