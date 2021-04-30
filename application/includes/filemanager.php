<script src="<?php echo base_url('adminlte/js/require.js'); ?>"></script>
<script>
    Promise.all([window.load_js()]).then(() => { 
       console.log('Filemanager Initialized...');
      }).catch((response) => {
            alert('Error encountered while loading the scripts');
      })

    function load_js(){

        define('elFinderConfig', {

            defaultOpts : {
                url : '<?php echo $connector ?>'
                ,
                height:450,
                width:'auto',
                commandsOptions : {
                    edit : {
                        extraOptions : {
                            creativeCloudApiKey : '',
                            managerUrl : ''
                        }
                    }
                    ,quicklook : {
                        googleDocsMimes : ['application/pdf', 'image/tiff', 'application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']
                    }
                }
                ,bootCallback : function(fm, extraObj) {
                    fm.bind('init', function() {
                    });
                    var title = document.title;
                    fm.bind('open', function() {
                        var path = '',
                            cwd  = fm.cwd();
                        if (cwd) {
                            path = fm.path(cwd.hash) || null;
                        }
                         
                    }).bind('destroy', function() {
                         
                    });
                }
            },
            managers : {
                'elfinder': {}
            }
        });
        define('returnVoid', void 0);
        (function(){
            var 
                elver = '2.1.50',
                jqver = '3.2.1',
                uiver = '1.12.1',
                lang = (function() {
                    var locq = window.location.search,
                        fullLang, locm, lang;
                    if (locq && (locm = locq.match(/lang=([a-zA-Z_-]+)/))) {
                        fullLang = locm[1];
                    } else {
                        fullLang = (navigator.browserLanguage || navigator.language || navigator.userLanguage);
                    }
                    lang = fullLang.substr(0,2);
                    if (lang === 'ja') lang = 'jp';
                    else if (lang === 'pt') lang = 'pt_BR';
                    else if (lang === 'ug') lang = 'ug_CN';
                    else if (lang === 'zh') lang = (fullLang.substr(0,5).toLowerCase() === 'zh-tw')? 'zh_TW' : 'zh_CN';
                    return lang;
                })(),
                
                start = function(elFinder, editors, config) {
                    elFinder.prototype.loadCss('<?php echo base_url('assets/jquery-ui/jquery-ui.css');?>');
                    
                    $(function() {
                        var optEditors = {
                                commandsOptions: {
                                    edit: {
                                        editors: Array.isArray(editors)? editors : []
                                    }
                                }
                            },
                            opts = {};
                        if (config && config.managers) {
                            $.each(config.managers, function(id, mOpts) {
                                opts = Object.assign(opts, config.defaultOpts || {});
                                // editors marges to opts.commandOptions.edit
                                try {
                                    mOpts.commandsOptions.edit.editors = mOpts.commandsOptions.edit.editors.concat(editors || []);
                                } catch(e) {
                                    Object.assign(mOpts, optEditors);
                                }
                                $('#' + id).elfinder(
                                    $.extend(true, { lang: lang }, opts, mOpts || {}),
                                    function(fm, extraObj) {
                                        fm.bind('init', function() {
                                            delete fm.options.rawStringDecoder;
                                            if (fm.lang === 'jp') {
                                                require(
                                                    [ 'encoding-japanese' ],
                                                    function(Encoding) {
                                                        if (Encoding.convert) {
                                                            fm.options.rawStringDecoder = function(s) {
                                                                return Encoding.convert(s,{to:'UNICODE',type:'string'});
                                                            };
                                                        }
                                                    }
                                                );
                                            }
                                        });
                                    }
                                );
                            });
                        } else {
                         
                        }
                    });
                },

                load = function() {
                    require(
                        [
                            'elfinder'
                            , 'extras/editors.default'
                            , 'elFinderConfig'
                        ],
                        start,
                        function(error) {
                     
                        }
                    );
                },
        
                ie8 = (typeof window.addEventListener === 'undefined' && typeof document.getElementsByClassName === 'undefined');

            require.config({
                baseUrl : '<?php echo base_url('assets/elfinder/js');?>',
                paths : {
                    'jquery'   : '<?php echo base_url('adminlte/plugins/jquery/jquery.min'); ?>',
                    'jquery-ui': '<?php echo base_url('assets/jquery-ui/jquery-ui.min'); ?>',
                    'elfinder' : 'elfinder.min',
                    'encoding-japanese': '<?php echo base_url('assets/js/encoding'); ?>'
                },
                waitSeconds : 10
            });

            load();

        })();
    }
</script>