const heroVideo = document.getElementById('hero-video');
const heroCopy = document.getElementById('hero-copy');

document.addEventListener('scroll', () => {
    let {scrollY} = window;

    heroVideo.style.top = 0.4 * scrollY + 'px';
    heroCopy.style.bottom = 0.15 * scrollY + 'px';
})