const WebFont = require('webfontloader');
console.log('load fonts');
WebFont.load({
  google: {
    families: ['Lora:400,400i', 'Montserrat:400,700']
  }
});
