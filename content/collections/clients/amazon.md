---
id: c6876c49-3ebe-447e-8867-628c44b4f6b0
blueprint: client
title: Amazon
logo: amazon.jpg
updated_by: 1d1068ab-208d-480d-a677-dda65fe0f490
updated_at: 1699635238
about:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Amazon approached Ravenna with a challenge.  For each new prospective employee, the team was having to email a bunch of PDFs.  The PDFs contained information about interview location, things to bring, how to get to the interview, and much, much more.   '
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Someone inside of the Devices team at Amazon had the idea to build an app that would help a person navigate the travel, interview process, and everything else required to introduce them to Amazon.  '
result:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Our work with the Devices team was spread across a few different phases:'
  -
    type: paragraph
    content:
      -
        type: text
        text: "First: Discovery.  It was necessary to catalog the content of a wide array of PDF's.   Content for how to travel, which travel agent to use, what ride-share services to use, how to keep receipts in order to get reimbursed, and much much more.  The prospective interviewer could be going to one of the multiple Amazon locations across the country and so for each location, there was different information."
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Next, once the content was cataloged we began organizing.  Our goal after combing through the content was to make it digestible.   This meant finding a way to only show the application user what they needed to see.  '
  -
    type: paragraph
    content:
      -
        type: text
        text: 'We landed on a two-part application structure.   '
  -
    type: orderedList
    attrs:
      order: 1
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: "Users would not be required to log into anything. This saved having to create and maintain a user database when the database already existed in Amazon's hiring systems. A user could select a few key options and those options would be cached for them."
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'A content tree that flowed content to the user based on their selections.  for instance, once a user had selected an interview location, the app would only show them the information for that location.   They could go back and change their answers anytime and see different information but this simple structure helped simplify the vast content.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Finally, we had to design and develop the mobile application.   We worked through a design phase that leveraged the Amazon brand and created a clean, easy-to-navigate user flow.  We then built out a   React Native mobile application that was launchable on iOS and Android platforms. Additionally, we set up the app and its content so that it could easily be maintained by Amazon team members after the project was completed.  '
gallery:
  - amazon-1.jpg
  - amazon-2.jpg
  - amazon-3.jpg
  - amazon-4.jpg
one_image: false
seo:
  title: 'Amazon Custom Hiring Mobile Application'
  description: 'Ravenna built Amazon a mobile application (iOS and Android) that helped share critical information with prospective employees about the hiring process'
cool_facts:
  - 'React Native'
  - 'iOS / Android Platforms'
apis_integrated:
  - 'AWS Cloud Analytics'
  - 'AWS SES'
---
