# Minus1 Plugin (for EE3/EE4)
Wrap this tag around any number to subtract one integer from it. Based on [Mike Heavers EE2 "Index" plugin](https://devot-ee.com/add-ons/mh-index) to start {count} from zero, but it will work for other things too. Also sanitizes and validates input and spits out [Bootstrap](https://getbootstrap.com) friendly error messages.

## Usage

### {exp:minus1}
Takes any numeric input between the tag pairs and subtracts 1 from it.

#### Example Usage
To output 1978 to your template, it would look like this in your page template:

```{exp:minus1}1979{/exp:minus1}```

It's real useful for dealing with other EE variables. Say you needed the `{count}` variable in Channel Entries to start with a 0 instead of 1:

```{exp:minus1}{count}{/exp:minus1}```

## Changelog

### 1.0

- Initial release