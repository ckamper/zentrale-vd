// ═══════════════════════════════════════════════════════════
// validdata.de — Main JavaScript
// ═══════════════════════════════════════════════════════════

(function() {
  'use strict';
  
  // DOM Ready
  document.addEventListener('DOMContentLoaded', function() {
    console.log('validdata.de initialized');
    
    // Initialize components
    initializeNavigation();
    initializeSmoothScrolling();
  });
  
  // Navigation
  function initializeNavigation() {
    const nav = document.querySelector('.vd-nav');
    if (!nav) return;
    
    // Add any navigation logic here
  }
  
  // Smooth scrolling for anchor links
  function initializeSmoothScrolling() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href === '#') return;
        
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  }
})();
