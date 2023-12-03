gsap.registerPlugin(ScrollTrigger, ScrollSmoother);



const heroHeading = document.querySelector(".hero-heading");
const heroText = document.querySelector(".hero-text");
ScrollSmoother.create({
  content: "#content",
  wrapper: "#viewport",
  smooth: 2
})



let scrollEls = document.querySelector(".section-hero");

let scl = ScrollTrigger.create({
  trigger: scrollEls,
  pin: ".hero-bg-img",
  start: "-140px top",
  end: "bottom top",
  markers: true,
});




// this is the helper function that sets it all up.It also sets the default "scroller" to the content so you don't have to do that on all your ScrollTriggers.
function smoothScroll(content, viewport, smoothness) {
	content = gsap.utils.toArray(content)[0];
	smoothness = smoothness || 1;

	gsap.set(viewport || content.parentNode, {overflow: "hidden", position: "fixed", height: "100%", width: "100%", top: 0, left: 0, right: 0, bottom: 0});
	gsap.set(content, {overflow: "visible", width: "100%"});

	let getProp = gsap.getProperty(content),
		setProp = gsap.quickSetter(content, "y", "px"),
		setScroll = ScrollTrigger.getScrollFunc(window),
		removeScroll = () => content.style.overflow = "visible",
		killScrub = trigger => {
			let scrub = trigger.getTween ? trigger.getTween() : gsap.getTweensOf(trigger.animation)[0]; 
			scrub && scrub.pause();
			trigger.animation.progress(trigger.progress);
		},
		height, isProxyScrolling;

	function refreshHeight() {
		height = content.clientHeight;
		content.style.overflow = "visible"
		document.body.style.height = height + "px";
    return height - document.documentElement.clientHeight;
	}

	ScrollTrigger.addEventListener("refresh", () => {
		removeScroll();
		requestAnimationFrame(removeScroll);
	})
	ScrollTrigger.defaults({scroller: content});
	ScrollTrigger.prototype.update = p => p; 

	ScrollTrigger.scrollerProxy(content, {
		scrollTop(value) {
			if (arguments.length) {
				isProxyScrolling = true; 
				setProp(-value);
				setScroll(value);
				return;
			}
			return getProp("y");
		},
    scrollHeight: () => document.body.scrollHeight,
		getBoundingClientRect() {
			return {top: 0, left: 0, width: window.innerWidth, height: window.innerHeight};
		}
	});

	return ScrollTrigger.create({
		animation: gsap.fromTo(content, {y:0}, {
			y: () => document.documentElement.clientHeight - height,
			ease: "none",
			onUpdate: ScrollTrigger.update
		}),
		scroller: window,
		invalidateOnRefresh: true,
		start: 0,
		end: refreshHeight,
    refreshPriority: -999,
		scrub: smoothness,
		onUpdate: self => {
			if (isProxyScrolling) {
				killScrub(self);
				isProxyScrolling = false;
			}
		},
		onRefresh: killScrub // when the screen resizes, we just want the animation to immediately go to the appropriate spot rather than animating there, so basically kill the scrub.
	});
}

const collapsibleButtons = document.querySelectorAll(
	".collapsible-trigger-btn"
  );
  
  collapsibleButtons.forEach((collapsibleButton) => {
	const collapsibleContentDataHeight =
	  collapsibleButton.nextElementSibling.offsetHeight;
	collapsibleButton.nextElementSibling.style.height = 0;
	collapsibleButton.addEventListener("click", (e) => {
	  if (
		!e.currentTarget.parentElement.classList.contains("collapsible-tab__open")
	  ) {
		e.currentTarget.parentElement.classList.toggle("collapsible-tab__open");
		e.currentTarget.nextElementSibling.style.height = `${collapsibleContentDataHeight}px`;
	  } else {
		e.currentTarget.parentElement.classList.remove("collapsible-tab__open");
		e.currentTarget.nextElementSibling.style.height = 0;
	  }
	});
  });