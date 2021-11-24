<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/web/css/post.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body style="background-color: rgb(255, 225, 185)">
        <div style="margin-top: 5%"></div>
        <div>
            <div class="container" style="background-color: rgb(99, 99, 99)">
                <div className="row">
                    <div style="margin-top: 1em"></div>
                    <div className="d-flex flex-column align-items-center text-center p-3 py-5">
                        <div class="card" style="background-color: rgb(0, 0, 0)">
                            <h1 class="text-light">私の投稿</h1>
                        </div>
                        <div style="margin-top: 1em"></div>
                        <div class="card-body" style="background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAAA1BMVEX///+nxBvIAAAAR0lEQVR4nO3BAQEAAACCIP+vbkhAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAO8GxYgAAb0jQ/cAAAAASUVORK5CYII=')">
                            <div className="row mt-2">
                                <div class="container-fluid">
                                    <div class="row pre-scrollable">
                                        <div class="col-6 col-sm-4 col-md-3 p-2">
                                            <a href="https://www.w3schools.com/">
                                                <div class="card-1">
                                                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <div class="iconview">
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.w3schools.com/cssref/pr_margin-right.asp">
                                                                        <svg viewBox="0 0 16 16" size="16" xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="currentColor" class="bi bi-eye-fill">
                                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://getbootstrap.com/docs/4.0/utilities/borders/">
                                                                        <svg viewBox="0 0 16 16" size="16" xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="currentColor" class="bi bi-eye-fill">
                                                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>        
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h5 class="card-title">タイトル</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 p-2">
                                            <a href="https://www.w3schools.com/">
                                                <div class="card-1">
                                                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <div class="iconview">
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.w3schools.com/cssref/pr_margin-right.asp">
                                                                        <svg viewBox="0 0 16 16" size="16" xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="currentColor" class="bi bi-eye-fill">
                                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://getbootstrap.com/docs/4.0/utilities/borders/">
                                                                        <svg viewBox="0 0 16 16" size="16" xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="currentColor" class="bi bi-eye-fill">
                                                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>        
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h5 class="card-title">タイトル</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 p-2">
                                            <a href="https://www.w3schools.com/">
                                                <div class="card-1">
                                                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <div class="iconview">
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.w3schools.com/cssref/pr_margin-right.asp">
                                                                        <svg viewBox="0 0 16 16" size="16" xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="currentColor" class="bi bi-eye-fill">
                                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://getbootstrap.com/docs/4.0/utilities/borders/">
                                                                        <svg viewBox="0 0 16 16" size="16" xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="currentColor" class="bi bi-eye-fill">
                                                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>        
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h5 class="card-title">タイトル</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 p-2">
                                            <a href="https://www.w3schools.com/">
                                                <div class="card-1">
                                                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <div class="iconview">
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.w3schools.com/cssref/pr_margin-right.asp">
                                                                        <svg viewBox="0 0 16 16" size="16" xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="currentColor" class="bi bi-eye-fill">
                                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://getbootstrap.com/docs/4.0/utilities/borders/">
                                                                        <svg viewBox="0 0 16 16" size="16" xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="currentColor" class="bi bi-eye-fill">
                                                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>        
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h5 class="card-title">タイトル</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 p-2">
                                            <a href="https://www.w3schools.com/">
                                                <div class="card-1">
                                                    <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <div class="iconview">
                                                            <ul>
                                                                <li>
                                                                    <a href="https://www.w3schools.com/cssref/pr_margin-right.asp">
                                                                        <svg viewBox="0 0 16 16" size="16" xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="currentColor" class="bi bi-eye-fill">
                                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://getbootstrap.com/docs/4.0/utilities/borders/">
                                                                        <svg viewBox="0 0 16 16" size="16" xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="currentColor" class="bi bi-eye-fill">
                                                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>        
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h5 class="card-title">タイトル</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                    <div style="margin-top: 1em"></div>
                </div>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>