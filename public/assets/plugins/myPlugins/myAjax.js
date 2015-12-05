(function() {

  if (typeof Object.create !== 'function') {
    Object.create = function(obj) {
      var F;
      F = function() {};
      F.prototype = obj;
      return new F();
    };
  }

  (function($, window, document) {
    'use strict';
    var cObject = {

      init: function(options, elem) {
        var self = this; // The object
        self.elem = elem; // the element passed
        self.$elem = $(elem); // jquery version


        if (typeof options === 'string') {
          self.url = options;
        } 

        self.settings = $.extend({}, $.fn.tasksCheck.settings, options);
        return self.refresh(1);
      },

      refresh: function(length) {
        var self = this;
        return setTimeout(function() {
          return self.fetch().done(function(results) {
            results = self.limit(results.results, self.settings.limit);
            self.buildFrag(results);
            self.display();
            if (typeof self.settings.onComplete === 'function') {
              self.settings.onComplete.apply(self.elem, arguments);
            }
            if (self.settings.refresh()) {
              return self.refresh();
            }
          });
        }, length || self.settings.refresh);
      },
      fetch: function() {
        return $.ajax({
          url: this.url,
          type: 'GET',
          data: {
            q: this.search
          },
          dataType: 'jsonp'
        });
      },
      buildFrag: function(results) {
        var self;
        self = this;
        return self.tweets = $.map(results, function(obj, i) {
          return $(self.settings.wrapEachWith).append(obj.text)[0];
        });
      },
      display: function() {
        var self;
        self = this;
        if (self.settings.transition === 'none' || !self.settings.transition) {
          return self.$elem.html(self.tweets);
        } else {
          return self.$elem[self.settings.transition](500, function() {
            return $(this).html(self.tweets)[self.settings.transition](500);
          });
        }
      },
      limit: function(obj, count) {
        return obj.slice(0, count);
      }
    };
    $.fn.tasksCheck = function(options) {
      var elem = this; // the element passed
      return elem.each(function() {
        var tasks = Object.create(cObject);
        tasks.init(options, elem);
        return $.data(elem, 'tasksCheck', tasks);
      });
    };
    return $.fn.tasksCheck.settings = {
      url: '',
      search: '@tuspremium',
      wrapEachWith: '<li></li>',
      limit: 10,
      refresh: null,
      onComplete: null,
      transition: 'fadeToggle'
    };
  })(jQuery, window, document);

}).call(this);
