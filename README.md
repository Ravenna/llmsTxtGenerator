# Llms Generator

> Llms Generator is a Statamic addon that allows you to select which of your collections data you wish to inlude in and generate an LLMs.txt file for Large language models parsing by AI.

## Features

This addon:

- Allows you to include or exclude selected collections in and, 
- Generate an llms.txt file for your selected collections to be parsed by AI.

## How to Install

You can search for this addon in the `Tools > Addons` section of the Statamic control panel and click **install**, or run the following command from your project root:

``` bash
composer require ravenna/llmsgenerator
```

## How to Use

After successful install of the add-on into your Statamic website, in your Statamic sites control panel go to `Tools > LLMs Generator`. Then select `Generate` if you wish to include all collections in your llms.txt file, OR go to `Collections` view to select which specific collections you wish to include in your llms.txt data. Then save your selections and go back to `Generate` to generate a new llms.txt file. The file will be found in `public/llms.txt` and is now ready to be parsed by AI bots.
