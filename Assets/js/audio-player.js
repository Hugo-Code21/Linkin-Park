(function () {
    "use strict";

    function initAudioPlayer() {
        var player = document.querySelector("[data-audio-player]");
        if (!player) {
            return;
        }

        var audio = player.querySelector("[data-audio-element]");
        var toggle = player.querySelector("[data-audio-toggle]");
        var title = player.querySelector("[data-audio-title]");

        if (!audio || !toggle) {
            return;
        }

        toggle.addEventListener("click", function () {
            if (audio.paused) {
                audio.play().catch(function () {
                    toggle.textContent = "Play";
                });
            } else {
                audio.pause();
            }
        });

        audio.addEventListener("error", function () {
            title.textContent = "Audio unavailable";
            toggle.disabled = true;
            toggle.textContent = "Offline";
        });
        audio.addEventListener("play", function () {
            toggle.innerHTML = "<span aria-hidden=\"true\">&#10074;&#10074;</span> Pause";
        });
        audio.addEventListener("pause", function () {
            toggle.innerHTML = "<span aria-hidden=\"true\">&#9654;</span> Play";
        });
        audio.addEventListener("ended", function () {
            toggle.innerHTML = "<span aria-hidden=\"true\">&#8635;</span> Replay";
        });
    }

    document.addEventListener("DOMContentLoaded", initAudioPlayer);
}());