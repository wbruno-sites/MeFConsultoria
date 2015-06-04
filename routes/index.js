var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(request, response, next) {
  response.render('index');
});

router.get('/quem-somos', function(request, response, next) {
  response.render('quem-somos');
});

router.get('/contato', function(request, response, next) {
  response.render('contato');
});

module.exports = router;
