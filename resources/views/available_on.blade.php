<!DOCTYPE html>
<html>
	<head>
    	<meta name = "viewport" content = "width = device-width, init-scale = 1.0">
    </head>
    <body>
        <style>
            .playstore-button {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                border: 2px solid #000;
                border-radius: 9999px;
                background-color: rgba(0, 0, 0, 1);
                padding: 0.625rem 1.5rem;
                text-align: center;
                color: rgba(255, 255, 255, 1);
                outline: 0;
                transition: all  .2s ease;
                text-decoration: none;
            }
            .playstore-button:hover {
                background-color: transparent;
                color: rgba(0, 0, 0, 1);
            }
            .icon {
                height: 1.5rem;
                width: 1.5rem;
            }
            .texts {
                margin-left: 1rem;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                line-height: 1;
            }
            .text-1 {
                margin-bottom: 0.25rem;
                font-size: 0.75rem;
                line-height: 1rem;
            }
            .text-2 {
                font-weight: 600;
            }
        </style>
        <a class="playstore-button" href="#">
        	<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon" viewBox="0 0 512 512">
        		<path d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"></path>
        	</svg>
        	<span class="texts">
        		<span class="text-1">GET IT ON</span>
        		<span class="text-2">Google Play</span>
        	</span>
        </a>
        <a class="playstore-button" href="#">
        	<!--svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="2.5" stroke="#fff" fill="none" class="duration-300 transform transition-all icon" style="width: 48px; height: 48px;"-->
            <!--svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon" viewBox="10 10 45 45" stroke-width="3.5" stroke="#fff"-->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="icon" viewBox="10 10 45 45" stroke-width="3.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M24.03 39.07l-1.66 2.9M34.86 20.12l-8.81 15.41M34.19 28.31l7.98 13.66M29.39 20.12l2.77 4.72M19.54 35.53h14.85M44.71 35.53h-6.3">
                </path><rect x="10.23" y="10.23" width="43.55" height="43.55" rx="10.31" stroke-linecap="round" stroke-linejoin="round"></rect>
            </svg>
        	<span class="texts">
        		<span class="text-1">GET IT ON</span>
        		<span class="text-2">App Store</span>
        	</span>
        </a>
        <a class="playstore-button" href="#">
        	<svg role="img" class = "icon" viewBox="0 0 24 24" fill = "currentColor" stroke = "currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M.045 18.02c.072-.116.187-.124.348-.022 3.636 2.11 7.594 3.166 11.87 3.166 2.852 0 5.668-.533 8.447-1.595l.315-.14c.138-.06.234-.1.293-.13.226-.088.39-.046.525.13.12.174.09.336-.12.48-.256.19-.6.41-1.006.654-1.244.743-2.64 1.316-4.185 1.726-1.53.406-3.045.61-4.516.61-2.265 0-4.41-.396-6.435-1.187-2.02-.794-3.82-1.91-5.43-3.35-.1-.074-.15-.15-.15-.22 0-.047.02-.09.05-.13zm6.565-6.218c0-1.005.247-1.863.743-2.577.495-.71 1.17-1.25 2.04-1.615.796-.335 1.756-.575 2.912-.72.39-.046 1.033-.103 1.92-.174v-.37c0-.93-.105-1.558-.3-1.875-.302-.43-.78-.65-1.44-.65h-.182c-.48.046-.896.196-1.246.46-.35.27-.575.63-.675 1.096-.06.3-.206.465-.435.51l-2.52-.315c-.248-.06-.372-.18-.372-.39 0-.046.007-.09.022-.15.247-1.29.855-2.25 1.82-2.88.976-.616 2.1-.975 3.39-1.05h.54c1.65 0 2.957.434 3.888 1.29.135.15.27.3.405.48.12.165.224.314.283.45.075.134.15.33.195.57.06.254.105.42.135.51.03.104.062.3.076.615.01.313.02.493.02.553v5.28c0 .376.06.72.165 1.036.105.313.21.54.315.674l.51.674c.09.136.136.256.136.36 0 .12-.06.226-.18.314-1.2 1.05-1.86 1.62-1.963 1.71-.165.135-.375.15-.63.045-.195-.166-.375-.332-.526-.496l-.31-.347c-.06-.074-.166-.21-.317-.42l-.3-.435c-.81.886-1.603 1.44-2.4 1.665-.494.15-1.093.227-1.83.227-1.11 0-2.04-.343-2.76-1.034-.72-.69-1.08-1.665-1.08-2.94l-.05-.076zm3.753-.438c0 .566.14 1.02.425 1.364.285.34.675.512 1.155.512.045 0 .106-.007.195-.02.09-.016.134-.023.166-.023.614-.16 1.08-.553 1.424-1.178.165-.28.285-.58.36-.91.09-.32.12-.59.135-.8.015-.195.015-.54.015-1.005v-.54c-.84 0-1.484.06-1.92.18-1.275.36-1.92 1.17-1.92 2.43l-.035-.02zm9.162 7.027c.03-.06.075-.11.132-.17.362-.243.714-.41 1.05-.5.55-.133 1.09-.222 1.612-.24.14-.012.28 0 .41.03.65.06 1.05.168 1.172.33.063.09.09.228.09.39v.15c0 .51-.14 1.11-.415 1.8-.278.69-.664 1.248-1.156 1.68-.073.06-.14.09-.197.09-.03 0-.06 0-.09-.012-.09-.044-.107-.12-.064-.24.54-1.26.806-2.143.806-2.64 0-.15-.03-.27-.087-.344-.145-.166-.55-.257-1.224-.257-.243 0-.533.016-.87.046-.363.045-.7.09-1 .135-.09 0-.148-.014-.18-.044-.03-.03-.036-.047-.02-.077 0-.017.006-.03.02-.063v-.06z"/></svg>
        	<span class="texts">
        		<span class="text-1">GET IT ON</span>
        		<span class="text-2">Amazon</span>
        	</span>
        </a>
    </body>
</html>