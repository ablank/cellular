const _ = require('lodash');
const fs = require('fs');
const path = require('path');
const sharp = require('sharp');
const { replace } = require('lodash');

const src = [path.resolve('src', 'assets', 'icons', 'svg')];

const process = async (imagepath, name) => {
  const destination = path.resolve('dist', 'assets', 'icons', 'png', name.replace(/.svg/, '.png'));
 // const destination = name.replace('.svg', '.png');

 console.log(`Imagepath: ${imagepath}`);
 console.log(`Name: ${name}`);
 console.log(`Destination: ${destination}`);
 
  await sharp(path.resolve(imagepath, name))
    .toFile(destination)
    .then((info) => {
      console.log(info);
    })
    .catch((e) => {
      console.error(e);
    });
};

src.forEach((directory) => {
  fs.readdir(directory, (e, files) => {
    files.forEach((svg) => {
      process(directory, svg);
    });
  });
});