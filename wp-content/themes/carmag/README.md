# Development setup

### Exporting to WordPress.org compilant zip file

To export your development files to the WordPress.org requirements run the following command: `bash zip.sh path/name.zip` or `npm run ziptheme path/name.zip`. We can suggest you to suffix your zip file with the version of your theme. Example: `../dx-starter-1.0.0.zip`

### .gitignore

DX Starter has a rather large .gitignore file. Make sure to check it out in case you have important file types or directories listed there. Part of the TODO for the theme is to create npm script that will auto generate a ZIP of your theme that is fully compatible with WordPress's theme standarts - meaning no .DS_Store files, no hidden .git folders or files, no gulp files or sass ones.

### Nodejs

You will need Node.js - Installing it gives you access to NPM. If you don't have the latest version, make sure you get it installed as it's very likley to get errors if you are not running the latest version. The current node version under which this theme is tested is `v5.0.0`. You can check your version by running `& node -v`.

**Updating installed Node.js is trough NPM :**

```
$ sudo npm cache clean -f
$ sudo npm install -g n
$ sudo n stable
```

If you have not installed Node.js yet then you will simply get the latest version and work from there.

### Gulp

To run the gulpfile.js you will need gulp-cli. It's best to install it globaly. The command for that is `$ npm install --global gulp-cli`.

### Installing dependences

Run `$ npm install`. This will create `node_modules` folder. Don't worry, it is ignored from the .gitignore file. On Windows deleting this would be rather tricky, so you will need another globally installed module named `rimraf`. For linux users it's not an issue.

### Running the watch function

`Gulpfile.js` is taking care of the commands for watch, paths and settings. All you need is to run `$ gulp`.

### Compile Sass without npm

If you have `sass` command installed, you can run `sass --watch assets/sass/master.scss:assets/css/master.min.css --style compressed` to compile only the sass file. For JavaScript you will have to use gulp. 

**Important**: using this command, you will NOT generate the same output as from Gulp. Inside the Gulp scripts we have autoprefixing among other packages that do more work than simply translating Sass into CSS. Expect browser support to suffer if you use only the sass command.

## Note:

The theme is not 100% ready as there are still small changes to be made in the future. Some of the todos are renaming some of the scss files, better js compile/minification and imgming scripts. That is what's on the radar for now, most likley there will be more to be added/changed. If you have any ideas feel free to open an issue !

### DX Stability Framework

Inside the `header.php` file you will find this meta tag: `<meta property="dxcheck:online" content="true" />`. We use it to track our sites, you might want to remove it for your projects. If you need more information, make sure to open an issue.

## Sass linter
Documentation for the Sass linter can be [seen here.](https://github.com/sasstools/sass-lint) It will be failing on !important rule, so try to find a better way to write your stylings. If that's still impossible add `// sass-lint:disable-line no-important` on the line where you've set it.