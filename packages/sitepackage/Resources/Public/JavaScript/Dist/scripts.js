/*!
 * Sitepackage v1.0.0 (https://elaphos.de)
 * Copyright 2017-2023 Andreas Hirsch
 * Licensed under the GPL-2.0-or-later license
 */
console.log("WE LOVE TYPO3");
$('.nav-item').hover(function(){
  $('.dropdown-toggle', this).trigger('click');
});

