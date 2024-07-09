document.addEventListener('DOMContentLoaded', function() {
    VanillaTilt.init(document.querySelectorAll(".sh-card"), {
        max: 10,
        speed: 400,
        glare: true,
        "max-glare": 0.2,
        scale: 1.05,
        perspective: 1000,
        easing: "cubic-bezier(.03,.98,.52,.99)",
        gyroscope: true
    });

    const cards = document.querySelectorAll('.sh-card');
    cards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const moveX = (x - centerX) / 10;
            const moveY = (y - centerY) / 10;
            
            this.style.transform = `translate3d(${-moveX}px, ${-moveY}px, 0) rotateX(${moveY}deg) rotateY(${-moveX}deg)`;
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translate3d(0, 0, 0) rotateX(0) rotateY(0)';
        });
    });
});