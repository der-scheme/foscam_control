# foscam_control
This project was created to provide a simple and cross-browser compatible interface to Foscam cameras, which regularly are only accessible through a proprietary and Windows-only browser plugin.

## Features
* Browser and OS agnostic.
* Connect to IP cameras implementing Foscam's CGI.
* Watch the camera's MJPEG feed.
* Control the camera's actuators. Zooming should work as well, but is untested, because our camera didn't seem to support it.
* Circumvent modern web browsers' CORS protection features through a server side proxy script. _The script must not, under any circumstances, be accessible through untrusted networks such as the open web._
* Take pictures.

## Usage
Input the URL to the camera's landing page (usually _http://&lt;ipaddress&gt;:88_), the user name and password into the input fields at the top of the page. Note that our camera will only support streaming for users whose password is not empty.

Control the camera using the arrow keys on your keyboard, and use page up/down for zooming (if supported).
Click on the stream to open a snapshot in a new tab.

## Setup
1. If you are planning on using the proxy script, make sure your web server supports both PHP and PHP Curl.
2. Upload the index.html and optionally the proxy.php to your web server.
3. Ideally, protect the directory with a password.

The index.html will theoretically also work without a proxy, but only if accessed through the _file:_ protocol and with CORS protection features disabled.

## Known Issues
* For streaming, the script will not go through a proxy, but will rather connect to the camera directly.
* Currently, only keyboard control is supported. There are no immediate plans for the addition of other control methods.

# Disclaimer
This is an independent project. We are not affiliated with Foscam in any way.
