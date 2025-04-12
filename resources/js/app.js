import './bootstrap';
import 'bootstrap';

// Japanese Portfolio JavaScript

// Animate skill bars on scroll
document.addEventListener('DOMContentLoaded', function() {
    const skillBars = document.querySelectorAll('.skill-progress');
    let animated = false; // Track if animation has already occurred
    
    // Function to check if element is in viewport with offset
    function isInViewport(element, offset = 0) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 - offset &&
            rect.right >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) + offset &&
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
                }, 1000);
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

    // Add fade-in animation for elements with class 'fade-in'
    const fadeElements = document.querySelectorAll('.fade-in');
    function handleFadeElements() {
        fadeElements.forEach(element => {
            if (isInViewport(element)) {
                element.classList.add('visible');
            }
        });
    }
    
    // Initial check and scroll listener for fade elements
    handleFadeElements();
    window.addEventListener('scroll', handleFadeElements);
    
    // Add slide-in animations for elements
    const slideLeftElements = document.querySelectorAll('.slide-in-left');
    const slideRightElements = document.querySelectorAll('.slide-in-right');
    const slideUpElements = document.querySelectorAll('.slide-in-up');
    
    function handleSlideElements() {
        // Use a larger offset to trigger animations earlier (before reaching navbar)
        const animationOffset = 200; // Adjust this value as needed
        
        // Handle slide-in-left elements
        slideLeftElements.forEach(element => {
            if (isInViewport(element, animationOffset)) {
                element.classList.add('active');
            }
        });
        
        // Handle slide-in-right elements
        slideRightElements.forEach(element => {
            if (isInViewport(element, animationOffset)) {
                element.classList.add('active');
            }
        });
        
        // Handle slide-in-up elements
        slideUpElements.forEach(element => {
            if (isInViewport(element, animationOffset)) {
                element.classList.add('active');
            }
        });
    }
    
    // Initial check and scroll listener for slide elements
    handleSlideElements();
    window.addEventListener('scroll', handleSlideElements);
    
    // Add pulse animation to buttons
    const pulseButtons = document.querySelectorAll('.btn-pulse');
    pulseButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.classList.add('pulse');
        });
        
        button.addEventListener('animationend', function() {
            this.classList.remove('pulse');
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
    
    // Add parallax effect to background elements
    const parallaxElements = document.querySelectorAll('.parallax');
    
    window.addEventListener('scroll', function() {
        const scrollPosition = window.pageYOffset;
        
        parallaxElements.forEach(element => {
            const speed = element.getAttribute('data-speed') || 0.5;
            element.style.transform = `translateY(${scrollPosition * speed}px)`;
        });
    });
    
    // Add typing animation for text elements
    const typingElements = document.querySelectorAll('.typing-text');
    
    typingElements.forEach(element => {
        const text = element.textContent;
        element.textContent = '';
        
        let i = 0;
        const typeWriter = () => {
            if (i < text.length) {
                element.textContent += text.charAt(i);
                i++;
                setTimeout(typeWriter, 100);
            }
        };
        
        // Start typing when element is in viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    typeWriter();
                    observer.unobserve(element);
                }
            });
        });
        
        observer.observe(element);
    });
    
    // Add image zoom effect on hover
    const zoomImages = document.querySelectorAll('.zoom-image');
    
    zoomImages.forEach(image => {
        image.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        image.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
});