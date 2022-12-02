---
id: 483442c7-e087-4a7a-9efb-c796d641e011
blueprint: article
title: 'Statamic vs. WordPress'
categories:
  - project-planning
tags:
  - statamic
  - laravel
updated_by: 1d1068ab-208d-480d-a677-dda65fe0f490
updated_at: 1669753244
seo:
  title: 'Statamic vs. WordPress'
  description: 'Hint: we think Statamic is better.  But lets review why.'
content:
  -
    type: paragraph
    content:
      -
        type: text
        text: "Yes, this is another this vs. that comparison article. We've been at this website development game for 15+ years, and we have some insight into this argument. The world needs it!\_\_"
  -
    type: paragraph
    content:
      -
        type: text
        text: "\"Gold jacket, green jacket, who gives a shit.\" Happy Gilmore was right. Sometimes it doesn't matter. But for all the times it does, here are some basic comparisons:\_"
  -
    type: ordered_list
    attrs:
      order: 1
    content:
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: "Features? Statamic and WordPress both have features.\_"
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Will it work for you? Maybe.'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Will it be everything you ever dreamed of? Nope!'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Will it solve world peace? We wish it could.'
  -
    type: paragraph
    content:
      -
        type: text
        text: "Comparing features between Statamic and WordPress is not the best way to have this discussion. With Statamic, the core is so well-built that it works for most sites out of the box. With WordPress, if the core CMS doesn't support your feature need, a plugin will likely solve your problem (more on this later)."
  -
    type: paragraph
    content:
      -
        type: text
        text: "\_Now that we have cleared up the fact that both have features, both may work for you, and that it's not the stuff of dreams, let's dig in.\_ \_"
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Clean and clear'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Creating easy-to-manage and author websites is at the top of our list. When discussing Statamic vs. WordPress, you generally talk about a brochure website. Of course, you can have a user log in, but most are brochure websites.'
  -
    type: paragraph
    content:
      -
        type: text
        text: "There are two types of people using brochure websites: visitors and managers/authors. We'll get to the visitors later. For now, let's discuss managing and authoring."
  -
    type: paragraph
    content:
      -
        type: text
        text: "In Statamic, the developer can build consistent and easy-to-use content authoring structures constructed to match your content. Changes along the way are easily implemented, keeping your content authors happy and your content easy to manage. One example of this is Statamic's Bard, a block-based editor. Bard lets you create different blocks and use them quickly as a content author. Website management and authoring are straightforward, and all maintain a familiar UI, so you know where and what you are working on."
  -
    type: paragraph
    content:
      -
        type: text
        text: "In the case of WordPress, things are complex. First, you have the WordPress block-based builder, but then you can add any number of page builders and new blocks using plugins. We even built our own WordPress block builder a few years back. The issue here is that the authoring experience needs to be more cohesive. You may edit tables on one plugin page and then add them to the content of another page. Then you have to manage content for a single page in two places. Choosing one block builder vs. another is a massive change that may take work.\_\_"
  -
    type: paragraph
    content:
      -
        type: text
        text: "The WordPress plugin system is great at face value. But issues arise with security (more on that later), different user interfaces, content edited in multiple places, and general confusion with where to find a control.\_"
  -
    type: paragraph
    content:
      -
        type: text
        text: 'For our time and money, Statamic is a better user experience for website managers and content authors while not sacrificing anything on the feature level.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'How the database changes things'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Statamic stores all of its content, out of the box, in flat files. This is a very different tact than WordPress, which requires a database. While not the only flat file content management system (CMS), it differs from WordPress.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Why does this flat file setup matter? Well, for a few reasons:'
  -
    type: ordered_list
    attrs:
      order: 1
    content:
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'You can version control your whole website and not ever risk losing content on accident'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Developers are productive when working with actual content'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Your site can be much faster'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Website changes can be deployed without taking your website down'
  -
    type: paragraph
    content:
      -
        type: text
        text: "With the content in flat files, you have access and control over it from the CMS side and any text editor.\_"
  -
    type: paragraph
    content:
      -
        type: text
        text: "WordPress requires a database. Using a database is not necessarily wrong, but it adds requirements to the hosting package and can affect your site's speed and security."
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Security
  -
    type: paragraph
    content:
      -
        type: text
        text: "Website security is a multi-billion dollar industry. So much time and effort is spent on website hacks, resolution, finding, and closing the gap that allowed the hack. It's all a bit much. Based on recent research, most of the hacked websites are WordPress sites. In the case WordPress gets hacked, you need to bring in a dev, get them access, review the issue, find the problem, resolve the problem and then keep that person on retainer in case it happens again.\_"
  -
    type: paragraph
    content:
      -
        type: text
        text: 'With Statamic, you have a few key security upsides:'
  -
    type: ordered_list
    attrs:
      order: 1
    content:
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: "Many website hacks happen via\_"
              -
                type: text
                marks:
                  -
                    type: link
                    attrs:
                      href: 'https://www.w3schools.com/sql/sql_injection.asp'
                      rel: null
                      target: _blank
                      title: null
                text: 'SQL injection'
              -
                type: text
                text: '. Using a web form, a bad actor can inject code into the database and get access to your user database or other content. Statamic does not use a database, so this is a non-factor'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: "A dedicated team maintains Statamic. Generally, you don't even need one plugin. But you won't need 25 plugins, each of which could expose your website to a hacker.\_\_"
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Statamic is built on top of Laravel, which we love, which is considered one of the most secure PHP frameworks available.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The security gains from using Statamic easily make it our default choice.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: "Let's talk about speed"
      -
        type: text
        text: .
  -
    type: paragraph
    content:
      -
        type: text
        text: 'First off, speed matters. Google ranks faster sites higher than slower sites. Your website visitors care about speed. A two-second load time can mean 80+% of your visitors bounce.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Statamic is a clear winner in the speed side of things for a few reasons:'
  -
    type: ordered_list
    attrs:
      order: 1
    content:
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'No database. We discussed this above.'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Static site generator. You can generate and deploy a static version of your site making things lightning fast.'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                text: 'Fewer plugin requirements. A default WordPress site can be fast. But the moment you start installing a page builder and other plugins, you will see the load times for your site go through the roof.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'If you want to rank on search engines, and want a fast site, let us help you build a Statamic site.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: "It's not free"
  -
    type: paragraph
    content:
      -
        type: text
        text: "WordPress is free. Statamic is not. Statamic Pro costs $259. At Ravenna, we cover that cost for you, but the underlying price means a dedicated team is working to ensure things are operational.\_"
  -
    type: paragraph
    content:
      -
        type: text
        text: "On the support side, when you have a question, the same team that developed Statamic is likely the team responding to your request.\_"
  -
    type: paragraph
    content:
      -
        type: text
        text: "With WordPress, you wind up with many plugins that cost something; support is only available across all the different plugin companies, and you don't have a single excellent team backing you up."
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'We love Statamic'
  -
    type: paragraph
    content:
      -
        type: text
        text: "We are certified Statamic developers, but more than that, we enjoy working on Statamic. After breathing fresh air, it's hard to go back to the polluted landscape of WordPress.\_"
  -
    type: paragraph
---
