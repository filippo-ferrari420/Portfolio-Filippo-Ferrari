import './bootstrap';
import 'bootstrap';

// Japanese Portfolio JavaScript

// Animate skill bars on scroll
document.addEventListener('DOMContentLoaded', function() {
    const skillBars = document.querySelectorAll('.skill-progress');
    let animated = false; // Track if animation has already occurred
    
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
    
    // Function to animate skill bars
    function animateSkillBars() {
        // Only animate once
        if (animated) return;
        
        let allVisible = true;
        skillBars.forEach(bar => {
            if (isInViewport(bar)) {
                const width = bar.getAttribute('data-width') || bar.style.width;
                bar.style.width = '0';
                bar.setAttribute('data-width', width);
                
                setTimeout(() => {
                    bar.style.width = width;
                }, 100);
            } else {
                allVisible = false;
            }
        });
        
        // If all bars are visible and animated, set animated to true
        if (allVisible && skillBars.length > 0) {
            animated = true;
            // Remove scroll listener once animation is complete
            window.removeEventListener('scroll', animateSkillBars);
        }
    }
    
    // Initial check on page load
    animateSkillBars();
    
    // Check on scroll
    window.addEventListener('scroll', animateSkillBars);
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// Add Japanese-style hover effects
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.japanese-card');
    
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
            this.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.1)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.05)';
        });
    });
});