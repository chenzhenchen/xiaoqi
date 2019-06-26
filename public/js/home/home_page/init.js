var config = {
  '.chosen-select'           : { width: '100%', disable_search_threshold: 99999 },
	'.chosen-select-gohref'    : { width: '100%', disable_search_threshold: 99999 },
  '.chosen-select-deselect'  : { allow_single_deselect: true },
  '.chosen-select-no-single' : { disable_search_threshold: 99999 },
  '.chosen-select-no-results': { no_results_text: 'Oops, nothing found!' },
  '.chosen-select-rtl'       : { rtl: true },
  '.chosen-select-width'     : { width: '100%' },
}
for (var selector in config) {
  $(selector).chosen(config[selector]);
}
