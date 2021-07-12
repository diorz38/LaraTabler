<script>
    // @formatter:off
    noUiSlider.create(document.getElementById('range-simple'), {
      start: 20,
      connect: [true, false],
      step: 10,
      range: {
        min: 0,
        max: 100
      }
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    noUiSlider.create(document.getElementById('range-connect'), {
      start: [60, 90],
      connect: [false, true, false],
      step: 10,
      range: {
        min: 0,
        max: 100
      }
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    noUiSlider.create(document.getElementById('range-color'), {
      start: 40,
      connect: [true, false],
      step: 10,
      range: {
        min: 0,
        max: 100
      }
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.Litepicker && (new Litepicker({
        element: document.getElementById('datepicker-default'),
        buttonText: {
          previousMonth: '<svg xmlns="http://www.w3.org/2000/svg" class= "icon" width="24" height="24" viewBox="0 0 24 24" stroke- width="2" stroke = "currentColor" fill="none" stroke- linecap="round" stroke - linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>',
    	  nextMonth: '<svg xmlns = "http://www.w3.org/2000/svg" class= "icon" width = "24" height = "24" viewBox = "0 0 24 24" stroke - width="2" stroke = "currentColor" fill = "none" stroke - linecap="round" stroke - linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>',
    		},
    	}));
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.Litepicker && (new Litepicker({
        element: document.getElementById('datepicker-icon'),
        buttonText: {
          previousMonth: '<svg xmlns="http://www.w3.org/2000/svg" class= "icon" width="24" height="24" viewBox="0 0 24 24" stroke- width="2" stroke = "currentColor" fill="none" stroke- linecap="round" stroke - linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>',
    			nextMonth: '<svg xmlns = "http://www.w3.org/2000/svg" class= "icon" width = "24" height = "24" viewBox = "0 0 24 24" stroke - width="2" stroke = "currentColor" fill = "none" stroke - linecap="round" stroke - linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg >',
    		},
    	}));
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.Litepicker && (new Litepicker({
        element: document.getElementById('datepicker-icon-prepend'),
        buttonText: {
          previousMonth: '<svg xmlns="http://www.w3.org/2000/svg" class= "icon" width="24" height="24" viewBox="0 0 24 24" stroke- width="2" stroke = "currentColor" fill="none" stroke- linecap="round" stroke - linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>',
    			nextMonth: '<svg xmlns = "http://www.w3.org/2000/svg" class= "icon" width = "24" height = "24" viewBox = "0 0 24 24" stroke - width="2" stroke = "currentColor" fill = "none" stroke - linecap="round" stroke - linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>',
    		},
    	}));
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.Litepicker && (new Litepicker({
        element: document.getElementById('datepicker-inline'),
        buttonText: {
          previousMonth: '<svg xmlns="http://www.w3.org/2000/svg" class= "icon" width="24" height="24" viewBox="0 0 24 24" stroke- width="2" stroke = "currentColor" fill="none" stroke- linecap="round" stroke - linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>',
    			nextMonth: '<svg xmlns = "http://www.w3.org/2000/svg" class= "icon" width = "24" height = "24" viewBox = "0 0 24 24" stroke - width="2" stroke = "currentColor" fill = "none" stroke - linecap="round" stroke - linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>',
    		},
      inlineMode: true,
    	}));
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      var el;
      window.Choices && (new Choices(el = document.getElementById('select-tags'), {
        classNames: {
          containerInner: el.className,
          input: 'form-control',
          inputCloned: 'form-control-sm',
          listDropdown: 'dropdown-menu',
          itemChoice: 'dropdown-item',
          activeState: 'show',
          selectedState: 'active',
        },
        shouldSort: false,
        searchEnabled: false,
      }));
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      var el;
      window.Choices && (new Choices(el = document.getElementById('select-tags-advanced'), {
        classNames: {
          containerInner: el.className,
          input: 'form-control',
          inputCloned: 'form-control-sm',
          listDropdown: 'dropdown-menu',
          itemChoice: 'dropdown-item',
          activeState: 'show',
          selectedState: 'active',
        },
        shouldSort: false,
        searchEnabled: false,
      }));
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      var el;
      window.Choices && (new Choices(el = document.getElementById('select-users'), {
        classNames: {
          containerInner: el.className,
          input: 'form-control',
          inputCloned: 'form-control-sm',
          listDropdown: 'dropdown-menu',
          itemChoice: 'dropdown-item',
          activeState: 'show',
          selectedState: 'active',
        },
        shouldSort: false,
        searchEnabled: false,
      }));
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      var el;
      window.Choices && (new Choices(el = document.getElementById('select-people'), {
        classNames: {
          containerInner: el.className,
          input: 'form-control',
          inputCloned: 'form-control-sm',
          listDropdown: 'dropdown-menu',
          itemChoice: 'dropdown-item',
          activeState: 'show',
          selectedState: 'active',
        },
        shouldSort: false,
        searchEnabled: false,
        callbackOnCreateTemplates: function (template) {
          var classNames = this.config.className,
            itemSelectText = this.config.itemSelectText;
          return {
            item: function (classNames, data) {
              return template('<div class="' + String(classNames.item) + ' ' + String(data.highlighted ? classNames.highlightedState : classNames.itemSelectable) + '" data-item data-id="' + String(data.id) + '" data-value="' + String(data.value) + '"' + String(data.active ? 'aria-selected="true"' : '') + '' + String(data.disabled ? 'aria-disabled="true"' : '') + '><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + String(data.label) + '</div>');
            },
            choice: function (classNames, data) {
              console.log('data', data);
              return template('<div class="' + String(classNames.item) + ' ' + String(classNames.itemChoice) + ' ' + String(data.disabled ? classNames.itemDisabled : classNames.itemSelectable) + '" data-select-text="' + String(itemSelectText) + '" data-choice  ' + String(data.disabled ? 'data-choice-disabled aria-disabled="true"' : 'data-choice-selectable') + ' data-id="' + String(data.id) + '" data-value="' + String(data.value) + '" ' + String(data.groupId > 0 ? 'role="treeitem"' : 'role="option"') + ' ><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + String(data.label) + '</div>');
            },
          };
        },
      }));
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      var el;
      window.Choices && (new Choices(el = document.getElementById('select-countries'), {
        classNames: {
          containerInner: el.className,
          input: 'form-control',
          inputCloned: 'form-control-sm',
          listDropdown: 'dropdown-menu',
          itemChoice: 'dropdown-item',
          activeState: 'show',
          selectedState: 'active',
        },
        shouldSort: false,
        searchEnabled: false,
        callbackOnCreateTemplates: function (template) {
          var classNames = this.config.className,
            itemSelectText = this.config.itemSelectText;
          return {
            item: function (classNames, data) {
              return template('<div class="' + String(classNames.item) + ' ' + String(data.highlighted ? classNames.highlightedState : classNames.itemSelectable) + '" data-item data-id="' + String(data.id) + '" data-value="' + String(data.value) + '"' + String(data.active ? 'aria-selected="true"' : '') + '' + String(data.disabled ? 'aria-disabled="true"' : '') + '><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + String(data.label) + '</div>');
            },
            choice: function (classNames, data) {
              console.log('data', data);
              return template('<div class="' + String(classNames.item) + ' ' + String(classNames.itemChoice) + ' ' + String(data.disabled ? classNames.itemDisabled : classNames.itemSelectable) + '" data-select-text="' + String(itemSelectText) + '" data-choice  ' + String(data.disabled ? 'data-choice-disabled aria-disabled="true"' : 'data-choice-selectable') + ' data-id="' + String(data.id) + '" data-value="' + String(data.value) + '" ' + String(data.groupId > 0 ? 'role="treeitem"' : 'role="option"') + ' ><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + String(data.label) + '</div>');
            },
          };
        },
      }));
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      var el;
      window.Choices && (new Choices(el = document.getElementById('select-labels'), {
        classNames: {
          containerInner: el.className,
          input: 'form-control',
          inputCloned: 'form-control-sm',
          listDropdown: 'dropdown-menu',
          itemChoice: 'dropdown-item',
          activeState: 'show',
          selectedState: 'active',
        },
        shouldSort: false,
        searchEnabled: false,
        callbackOnCreateTemplates: function (template) {
          var classNames = this.config.className,
            itemSelectText = this.config.itemSelectText;
          return {
            item: function (classNames, data) {
              return template('<div class="' + String(classNames.item) + ' ' + String(data.highlighted ? classNames.highlightedState : classNames.itemSelectable) + '" data-item data-id="' + String(data.id) + '" data-value="' + String(data.value) + '"' + String(data.active ? 'aria-selected="true"' : '') + '' + String(data.disabled ? 'aria-disabled="true"' : '') + '><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + String(data.label) + '</div>');
            },
            choice: function (classNames, data) {
              console.log('data', data);
              return template('<div class="' + String(classNames.item) + ' ' + String(classNames.itemChoice) + ' ' + String(data.disabled ? classNames.itemDisabled : classNames.itemSelectable) + '" data-select-text="' + String(itemSelectText) + '" data-choice  ' + String(data.disabled ? 'data-choice-disabled aria-disabled="true"' : 'data-choice-selectable') + ' data-id="' + String(data.id) + '" data-value="' + String(data.value) + '" ' + String(data.groupId > 0 ? 'role="treeitem"' : 'role="option"') + ' ><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + String(data.label) + '</div>');
            },
          };
        },
      }));
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      var el;
      window.Choices && (new Choices(el = document.getElementById('select-countries-valid'), {
        classNames: {
          containerInner: el.className,
          input: 'form-control',
          inputCloned: 'form-control-sm',
          listDropdown: 'dropdown-menu',
          itemChoice: 'dropdown-item',
          activeState: 'show',
          selectedState: 'active',
        },
        shouldSort: false,
        searchEnabled: false,
      }));
    });
    // @formatter:on
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      var el;
      window.Choices && (new Choices(el = document.getElementById('select-countries-invalid'), {
        classNames: {
          containerInner: el.className,
          input: 'form-control',
          inputCloned: 'form-control-sm',
          listDropdown: 'dropdown-menu',
          itemChoice: 'dropdown-item',
          activeState: 'show',
          selectedState: 'active',
        },
        shouldSort: false,
        searchEnabled: false,
      }));
    });
    // @formatter:on
</script>
<script>
    let sliderTriggerList = [].slice.call(document.querySelectorAll("[data-slider]"));
    sliderTriggerList.map(function (sliderTriggerEl) {
      let options = {};
      if (sliderTriggerEl.getAttribute("data-slider")) {
        options = JSON.parse(sliderTriggerEl.getAttribute("data-slider"));
      }
      let slider = noUiSlider.create(sliderTriggerEl, options);
      if (options['js-name']) {
        window[options['js-name']] = slider;
      }
    });
</script>
