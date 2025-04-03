// resources/js/components/previewIframe.js
var previewIframe = ({ state, statePath, autoResizeIframe, $wire }) => {
  return {
    data: state,
    ready: false,
    height: $wire.entangle(`${statePath}.height`),
    ready: $wire.entangle(`${statePath}.ready`),
    listenToMessage(event) {
      if (event.data?.type === "readyForPreview") {
        this.ready = true;
        this.$root.contentWindow.postMessage(JSON.stringify(this.data), "*");
      }
      if (event.data?.type === "previewResized") {
        this.height = event.data.height + "px";
      }
    },
    init() {
      if (this.ready) {
        this.$root.contentWindow.postMessage(JSON.stringify(this.data), "*");
      }
      window.addEventListener("message", this.listenToMessage.bind(this));
    },
    destroy() {
      window.removeEventListener("message", this.listenToMessage.bind(this));
    }
  };
};
var previewIframe_default = previewIframe;
export {
  previewIframe_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsiLi4vLi4vanMvY29tcG9uZW50cy9wcmV2aWV3SWZyYW1lLmpzIl0sCiAgInNvdXJjZXNDb250ZW50IjogWyJjb25zdCBwcmV2aWV3SWZyYW1lID0gKHsgc3RhdGUsIHN0YXRlUGF0aCwgYXV0b1Jlc2l6ZUlmcmFtZSwgJHdpcmUgfSkgPT4ge1xuICAgIHJldHVybiB7XG4gICAgICAgIGRhdGE6IHN0YXRlLFxuICAgICAgICByZWFkeTogZmFsc2UsXG4gICAgICAgIGhlaWdodDogJHdpcmUuZW50YW5nbGUoYCR7c3RhdGVQYXRofS5oZWlnaHRgKSxcbiAgICAgICAgcmVhZHk6ICR3aXJlLmVudGFuZ2xlKGAke3N0YXRlUGF0aH0ucmVhZHlgKSxcbiAgICAgICAgbGlzdGVuVG9NZXNzYWdlKGV2ZW50KSB7XG4gICAgICAgICAgICBpZiAoZXZlbnQuZGF0YT8udHlwZSA9PT0gJ3JlYWR5Rm9yUHJldmlldycpIHtcbiAgICAgICAgICAgICAgICB0aGlzLnJlYWR5ID0gdHJ1ZTtcbiAgICAgICAgICAgICAgICB0aGlzLiRyb290LmNvbnRlbnRXaW5kb3cucG9zdE1lc3NhZ2UoSlNPTi5zdHJpbmdpZnkodGhpcy5kYXRhKSwgJyonKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGlmIChldmVudC5kYXRhPy50eXBlID09PSAncHJldmlld1Jlc2l6ZWQnKSB7XG4gICAgICAgICAgICAgICAgdGhpcy5oZWlnaHQgPSBldmVudC5kYXRhLmhlaWdodCArICdweCc7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0sXG4gICAgICAgIGluaXQoKSB7XG4gICAgICAgICAgICBpZiAodGhpcy5yZWFkeSkge1xuICAgICAgICAgICAgICAgIHRoaXMuJHJvb3QuY29udGVudFdpbmRvdy5wb3N0TWVzc2FnZShKU09OLnN0cmluZ2lmeSh0aGlzLmRhdGEpLCAnKicpO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignbWVzc2FnZScsIHRoaXMubGlzdGVuVG9NZXNzYWdlLmJpbmQodGhpcykpO1xuICAgICAgICB9LFxuICAgICAgICBkZXN0cm95KCkge1xuICAgICAgICAgICAgd2luZG93LnJlbW92ZUV2ZW50TGlzdGVuZXIoJ21lc3NhZ2UnLCB0aGlzLmxpc3RlblRvTWVzc2FnZS5iaW5kKHRoaXMpKTtcbiAgICAgICAgfVxuICAgIH1cbn1cblxuZXhwb3J0IGRlZmF1bHQgcHJldmlld0lmcmFtZTtcblxuIl0sCiAgIm1hcHBpbmdzIjogIjtBQUFBLElBQU0sZ0JBQWdCLENBQUMsRUFBRSxPQUFPLFdBQVcsa0JBQWtCLE1BQU0sTUFBTTtBQUNyRSxTQUFPO0FBQUEsSUFDSCxNQUFNO0FBQUEsSUFDTixPQUFPO0FBQUEsSUFDUCxRQUFRLE1BQU0sU0FBUyxHQUFHLFNBQVMsU0FBUztBQUFBLElBQzVDLE9BQU8sTUFBTSxTQUFTLEdBQUcsU0FBUyxRQUFRO0FBQUEsSUFDMUMsZ0JBQWdCLE9BQU87QUFDbkIsVUFBSSxNQUFNLE1BQU0sU0FBUyxtQkFBbUI7QUFDeEMsYUFBSyxRQUFRO0FBQ2IsYUFBSyxNQUFNLGNBQWMsWUFBWSxLQUFLLFVBQVUsS0FBSyxJQUFJLEdBQUcsR0FBRztBQUFBLE1BQ3ZFO0FBQ0EsVUFBSSxNQUFNLE1BQU0sU0FBUyxrQkFBa0I7QUFDdkMsYUFBSyxTQUFTLE1BQU0sS0FBSyxTQUFTO0FBQUEsTUFDdEM7QUFBQSxJQUNKO0FBQUEsSUFDQSxPQUFPO0FBQ0gsVUFBSSxLQUFLLE9BQU87QUFDWixhQUFLLE1BQU0sY0FBYyxZQUFZLEtBQUssVUFBVSxLQUFLLElBQUksR0FBRyxHQUFHO0FBQUEsTUFDdkU7QUFFQSxhQUFPLGlCQUFpQixXQUFXLEtBQUssZ0JBQWdCLEtBQUssSUFBSSxDQUFDO0FBQUEsSUFDdEU7QUFBQSxJQUNBLFVBQVU7QUFDTixhQUFPLG9CQUFvQixXQUFXLEtBQUssZ0JBQWdCLEtBQUssSUFBSSxDQUFDO0FBQUEsSUFDekU7QUFBQSxFQUNKO0FBQ0o7QUFFQSxJQUFPLHdCQUFROyIsCiAgIm5hbWVzIjogW10KfQo=
