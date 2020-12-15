document.addEventListener('DOMContentLoaded', function() {
  GreenAudioPlayer.init({
      selector: '.player-with-accessibility',
      stopOthersOnPlay: true,
      enableKeystrokes: true,
      showDownloadButton: false,
      showTooltips: false,
  });
});