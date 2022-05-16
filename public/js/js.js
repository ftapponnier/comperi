let musicPlayers = [
 
    {
      audioPlayer: ".audio-2",
      trackInfo: [
        {
          song: "https://download.mp3-j.icu/d/DJ-Techno-Russian-Anthem.mp3",
          title: "Pearls",
          album: "Mad dog",
          art: "https://i1.sndcdn.com/artworks-ynIPywPu6cfxADoh-ABvyVg-t500x500.jpg",
        },      
        
        {
          song: "https://download.mp3-j.icu/d/DJ-Techno-Russian-Anthem.mp3",
          title: "Antwerpen",
          album: "Mad dog",
          art: "https://i1.sndcdn.com/artworks-fxFSldrbRBWrS1Lz-Z5kV8A-t500x500.jpg",
        },
        {
          song: "https://download.mp3-j.icu/d/DJ-Techno-Russian-Anthem.mp3",
          title: "Une autre histoire",
          album: "Mad dog",
          art: "https://i1.sndcdn.com/artworks-fgVjvlPXN8Ic50y5-I4FKAA-t500x500.jpg",
        },
      ],
    },
  ]
  
  console.log("number of audio players:", musicPlayers.length)
  musicPlayers.forEach(function (musicPlayer, index) {
    let tracksObj = { song: [], title: [], album: [], art: [] }
    musicPlayer.trackInfo.forEach(function (track) {
      tracksObj.song.push(track.song)
      tracksObj.title.push(track.title)
      tracksObj.album.push(track.album)
      tracksObj.art.push(track.art)
    })
    console.log(tracksObj.art)
    // console.log(index, musicPlayer.trackInfo[0].song)
    $(function () {
      let playerTrack = $(
          musicPlayer.audioPlayer + " > #app-cover > #player > #player-track"
        ),
        bgArtwork = $(musicPlayer.audioPlayer + " > #app-cover > #bg-artwork"),
        bgArtworkUrl,
        albumName = playerTrack.children("#album-name"),
        trackName = playerTrack.children("#track-name"),
        trackTime = playerTrack.children("#track-time"),
        tProgress = trackTime.children("#current-time"),
        tTime = trackTime.children("#track-length"),
        sArea = playerTrack.children("#s-area"),
        insTime = sArea.children("#ins-time"),
        sHover = sArea.children("#s-hover"),
        seekBar = sArea.children("#seek-bar"),
        playerContent = $(
          musicPlayer.audioPlayer + " > #app-cover > #player > #player-content"
        ),
        albumArt = playerContent.children("#album-art"),
        playerControls = playerContent.children("#player-controls"),
        playPauseButton = playerControls
          .children(".control")
          .children(".play-pause-button"),
        i = playPauseButton.find("i"),
        seekT,
        seekLoc,
        seekBarPos,
        cM,
        ctMinutes,
        ctSeconds,
        curMinutes,
        curSeconds,
        durMinutes,
        durSeconds,
        playProgress,
        bTime,
        nTime = 0,
        buffInterval = null,
        tFlag = false,
        albums = tracksObj.album,
        trackNames = tracksObj.title,
        albumArtworks = tracksObj.art,
        trackUrl = tracksObj.song,
        playPreviousTrackButton = playerControls
          .children(".control")
          .children("#play-previous"),
        playNextTrackButton = playerControls
          .children(".control")
          .children("#play-next"),
        currIndex = -1
  
      function playPause(audio) {
        setTimeout(function () {
          if (audio.paused) {
            playerTrack.addClass("active")
            albumArt.addClass("active")
            checkBuffering()
            i.attr("class", "fas fa-pause")
            audio.play()
          } else {
            playerTrack.removeClass("active")
            albumArt.removeClass("active")
            clearInterval(buffInterval)
            albumArt.removeClass("buffering")
            i.attr("class", "fas fa-play")
            audio.pause()
          }
        }, 300)
      }
  
      function showHover(event) {
        seekBarPos = sArea.offset()
        seekT = event.clientX - seekBarPos.left
        seekLoc = audio.duration * (seekT / sArea.outerWidth())
  
        sHover.width(seekT)
  
        cM = seekLoc / 60
  
        ctMinutes = Math.floor(cM)
        ctSeconds = Math.floor(seekLoc - ctMinutes * 60)
  
        if (ctMinutes < 0 || ctSeconds < 0) return
  
        if (ctMinutes < 0 || ctSeconds < 0) return
  
        if (ctMinutes < 10) ctMinutes = "0" + ctMinutes
        if (ctSeconds < 10) ctSeconds = "0" + ctSeconds
  
        if (isNaN(ctMinutes) || isNaN(ctSeconds)) insTime.text("--:--")
        else insTime.text(ctMinutes + ":" + ctSeconds)
  
        insTime.css({ left: seekT, "margin-left": "-21px" }).fadeIn(0)
      }
  
      function hideHover() {
        sHover.width(0)
        insTime
          .text("00:00")
          .css({ left: "0px", "margin-left": "0px" })
          .fadeOut(0)
      }
  
      function playFromClickedPos() {
        audio.currentTime = seekLoc
        seekBar.width(seekT)
        hideHover()
      }
  
      function updateCurrTime() {
        nTime = new Date()
        nTime = nTime.getTime()
  
        if (!tFlag) {
          tFlag = true
          trackTime.addClass("active")
        }
  
        curMinutes = Math.floor(audio.currentTime / 60)
        curSeconds = Math.floor(audio.currentTime - curMinutes * 60)
  
        durMinutes = Math.floor(audio.duration / 60)
        durSeconds = Math.floor(audio.duration - durMinutes * 60)
  
        playProgress = (audio.currentTime / audio.duration) * 100
  
        if (curMinutes < 10) curMinutes = "0" + curMinutes
        if (curSeconds < 10) curSeconds = "0" + curSeconds
  
        if (durMinutes < 10) durMinutes = "0" + durMinutes
        if (durSeconds < 10) durSeconds = "0" + durSeconds
  
        if (isNaN(curMinutes) || isNaN(curSeconds)) tProgress.text("00:00")
        else tProgress.text(curMinutes + ":" + curSeconds)
  
        if (isNaN(durMinutes) || isNaN(durSeconds)) tTime.text("00:00")
        else tTime.text(durMinutes + ":" + durSeconds)
  
        if (
          isNaN(curMinutes) ||
          isNaN(curSeconds) ||
          isNaN(durMinutes) ||
          isNaN(durSeconds)
        )
          trackTime.removeClass("active")
        else trackTime.addClass("active")
  
        seekBar.width(playProgress + "%")
  
        if (playProgress == 100) {
          i.attr("class", "fa fa-play")
          seekBar.width(0)
          tProgress.text("00:00")
          albumArt.removeClass("buffering").removeClass("active")
          clearInterval(buffInterval)
        }
      }
  
      function checkBuffering() {
        clearInterval(buffInterval)
        buffInterval = setInterval(function () {
          if (nTime == 0 || bTime - nTime > 1000) albumArt.addClass("buffering")
          else albumArt.removeClass("buffering")
  
          bTime = new Date()
          bTime = bTime.getTime()
        }, 100)
      }
  
      function selectTrack(flag) {
        // console.log("flag = ", flag)
        if (flag == 0 || flag == 1) ++currIndex
        else --currIndex
  
        if (currIndex > -1 && currIndex < albumArtworks.length) {
          if (flag == 0) i.attr("class", "fa fa-play")
          else {
            albumArt.removeClass("buffering")
            i.attr("class", "fa fa-pause")
          }
  
          seekBar.width(0)
          trackTime.removeClass("active")
          tProgress.text("00:00")
          tTime.text("00:00")
  
          currAlbum = albums[currIndex]
          currTrackName = trackNames[currIndex]
          currArtwork = albumArtworks[currIndex]
  
          audio.src = trackUrl[currIndex]
  
          nTime = 0
          bTime = new Date()
          bTime = bTime.getTime()
  
          if (flag != 0) {
            audio.play()
            playerTrack.addClass("active")
            albumArt.addClass("active")
  
            clearInterval(buffInterval)
            checkBuffering()
          }
  
          albumName.text(currAlbum)
          trackName.text(currTrackName)
          albumArt.children("img.active").removeClass("active")
          albumArt.children("#current-album-art").addClass("active")
          albumArt.children("img.active").attr("src", currArtwork)
  
          bgArtwork.css({ "background-image": "url(" + currArtwork + ")" })
        } else {
          if (flag == 0 || flag == 1) --currIndex
          else ++currIndex
        }
      }
  
      function initPlayer() {
        audio = new Audio()
  
        selectTrack(0)
  
        audio.loop = false
  
        playPauseButton.on("click", playPause.bind(this, audio))
  
        sArea.mousemove(function (event) {
          showHover(event)
        })
  
        sArea.mouseout(hideHover)
  
        sArea.on("click", playFromClickedPos)
  
        $(audio).on("timeupdate", updateCurrTime)
  
        playPreviousTrackButton.on("click", function () {
          selectTrack(-1)
        })
        playNextTrackButton.on("click", function () {
          selectTrack(1)
        })
      }
  
      initPlayer()
    })
  })
  