// Add Button Uppercase(function() {      tinymce.create('tinymce.plugins.uppercase', {          init : function(ed, url) {              ed.addButton('uppercase', {                title : 'Uppercase',				                image : url+'/../images/uppercase.png',                  onclick : function() {                      ed.selection.setContent(ed.selection.getContent().toUpperCase()).focus();                }              });          },          createControl : function(n, cm) {              return null;          }    });      tinymce.PluginManager.add('uppercase', tinymce.plugins.uppercase);  })();