function easeOutBounce (x) {
      var base = -Math.cos(x * (0.5 * Math.PI)) + 1;
      var rate = Math.pow(base,1.5);
      var rateR = Math.pow(1 - x, 2);
      var progress = -Math.abs(Math.cos(rate * (3.5 * Math.PI) )) + 1;
      return (1- rateR) + (progress * rateR);
      }

      var timing,
      timingProps = {
        type: 'delayed',
        duration: 150,
        start: 'autostart',
        pathTimingFunction: Vivus.LINEAR,
        animTimingFunction: Vivus.LINEAR
      };

      function timingTest (buttonEl, property, type) {
      var activeSibling = buttonEl.parentNode.querySelector('button.active');
      activeSibling.classList.remove('active');
      buttonEl.classList.add('active');

      timingProps.type = (property === 'type') ? type : timingProps.type;
      timingProps.pathTimingFunction = (property === 'path') ? Vivus[type] : timingProps.pathTimingFunction;
      timingProps.animTimingFunction = (property === 'anim') ? Vivus[type] : timingProps.animTimingFunction;

      timing && timing.stop().destroy();
      timing = new Vivus('timing-example', timingProps);
      }

      var hi = new Vivus('hi-there', {type: 'scenario-sync', duration: 20, dashGap: 20, forceRender: false},
      function () {
        if (window.console) {
          console.log('Animation finished. [log triggered from callback]');
        }
      }),
      obt1 = new Vivus('obturateur1', {type: 'oneByOne', duration: 1500}),
      obt2 = new Vivus('obturateur2', {type: 'oneByOne', duration: 100}),
      obt3 = new Vivus('obturateur3', {type: 'oneByOne', duration: 80}),
      obt3 = new Vivus('obturateur4', {type: 'oneByOne', duration: 80}),
      obt5 = new Vivus('obturateur5', {type: 'oneByOne', duration: 80}),
      obt6 = new Vivus('obturateur6', {type: 'oneByOne', duration: 80}),
      obt7 = new Vivus('obturateur7', {type: 'oneByOne', duration: 300}),       
      obt7 = new Vivus('obturateur8', {type: 'oneByOne', duration: 80})