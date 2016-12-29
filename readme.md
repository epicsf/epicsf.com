# Epic

The WordPress theme for <https://www.epicsf.com>.

Requires at least: WordPress 4.4
Tested up to: WordPress 4.4

# Page structure

```
body
  #page.site
    .site-inner
      #site-header-menu.site-header-menu
        nav#site-navigation.navbar
    #content.site-content
    footer#footer.site-footer
```

# Posts

There are two categories of posts that represent Events and Media.

## Events

Events are posts with an 'event' category and that have a featured image. Events that appear on the website--the homepage and the events page--are sorted according to post publish date, so to change the ordering, just adjust the post published date and save the post.

Once the event has passed, just delete the post.

### Creating a new event

New post.

Fill in the event title, subtitle (usually the date of the event) and the description.

Save a featured image.

After publishing, verify that the event shows up on the home page and events page.

## Media

Media posts are posts with a 'media' category. They represent a sermon / sermon series. Just like events, media posts that appear on the website--the homepage and the media page--are sorted according to post publish date, so to change the ordering, just adjust the post published date save the post.

### Creating a new media post

New post.

Fill in the sermon series title, subtitle (usually the months it runs) and the description.

Save a featured image.

After publishing, verify that the sermon shows up on the media page.

### Updating the homepage for the latest sermon

Go to <http://vimeo.com/epicsf> and open page for the latest sermon. Copy the id of the video from the URL of the page.

Edit the 'Featured' post. Change the video id in the post and save.

Verify that the video now shows up on the home page.

Edit the 'Featured Messages' post. Remove the bottom-most chunk of HTML (to get rid of the oldest message and make room for the new one).

Add a new chunk of HTML at the top:

```html
<div class="row">
  <div class="col-md-3">
    <div class="body2 date">11.22.15</div>
  </div>
  <div class="col-md-9">
    <div class="body2">Starting Point - Part 10</div>
    <div class="spacer-10"></div>
    <div class="title1"><a href="">Latest Message - Starting Over</a></div>
    <div class="spacer-40"></div>
  </div>
</div>
```

Put in the right date, series, and sermon title. Link to the sermon series media page. Save.

Verify that the homepage was updated and looks correct.

# Copyright

Copyright (c) 2017 Epic Church

MIT License

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
