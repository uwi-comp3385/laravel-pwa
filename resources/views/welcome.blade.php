@extends('layouts.app')

@section('content')
<section id="about">
      <div class="media media-img">
        <img src="{{ asset('images/william-iven-8514.jpg') }}" class="img-left" alt="Photo by William Iven" />
        <a class="photo-credit"
          href="https://unsplash.com/@firmbee?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge"
          target="_blank" rel="noopener noreferrer"
          title="Download free do whatever you want high-resolution photos from William Iven"><span
            style="display:inline-block;padding:2px 3px;"><svg xmlns="http://www.w3.org/2000/svg"
              style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white;"
              viewBox="0 0 32 32">
              <title>unsplash-logo</title>
              <path
                d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z">
              </path>
            </svg></span><span style="display:inline-block;padding:2px 3px;">William Iven</span></a>
      </div>
      <div class="details">
        <h2>About</h2>
        <p>This App is a simple demonstration of how to build a Progressive Web Application (PWA) using Laravel and
          existing web technologies. Progressive web applications are like good old web sites but better. It allows us
          to deliver amazing user experiences on the web and on mobile.</p>
      </div>
    </section>
    <section id="characteristics">
      <h2>Characteristics of Progressive Web Apps</h2>

      <div class="characteristics">
        <div class="card">
          <h3>Progressive</h3>
          <p>By definition, a progressive web app must work on any device and enhance progressively, taking advantage of
            any features available on the user’s device and browser.</p>
        </div>
        <div class="card">
          <h3>Discoverable</h3>
          <p>Because a progressive web app is a website, it should be discoverable in search engines. This is a major
            advantage over native applications, which still lag behind websites in searchability.</p>
        </div>
        <div class="card">
          <h3>Linkable</h3>
          <p>As another characteristic inherited from websites, a well-designed website should use the URI to indicate
            the current state of the application. This will enable the web app to retain or reload its state when the
            user bookmarks or shares the app’s URL.</p>
        </div>
        <div class="card">
          <h3>Responsive</h3>
          <p>A progressive web app’s UI must fit the device’s form factor and screen size.</p>
        </div>
        <div class="card">
          <h3>App-like</h3>
          <p>A progressive web app should look like a native app and be built on the application shell model, with
            minimal page refreshes.</p>
        </div>
        <div class="card">
          <h3>Connectivity-independent</h3>
          <p>It should work in areas of low connectivity or offline (our favorite characteristic).</p>
        </div>
        <div class="card">
          <h3>Re-engageable</h3>
          <p>Mobile app users are more likely to reuse their apps, and progressive web apps are intended to achieve the
            same goals through features such as push notifications.</p>
        </div>
        <div class="card">
          <h3>Installable</h3>
          <p>A progressive web app can be installed on the device’s home screen, making it readily available.</p>
        </div>
        <div class="card">
          <h3>Fresh</h3>
          <p>When new content is published and the user is connected to the Internet, that content should be made
            available in the app.</p>
        </div>
        <div class="card">
          <h3>Safe</h3>
          <p>Because a progressive web app has a more intimate user experience and because all network requests can be
            intercepted through service workers, it is imperative that the app be hosted over HTTPS to prevent
            man-in-the-middle attacks.</p>
        </div>
      </div>
    </section>
@endsection
