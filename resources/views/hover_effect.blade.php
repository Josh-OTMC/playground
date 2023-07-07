<!DOCTYPE html>
<html>
	<head>
    	<style>
        	body {
            	background-color: #0c0c0c;
            }
        	/* === removing default button style ===*/
            .button {
              margin: 0;
              height: auto;
              background: transparent;
              padding: 0;
              border: none;
            }

            /* button styling */
            .button {
              --border-right: 6px;
              --text-stroke-color: rgba(255,255,255,0.6);
              /* --text-stroke-color: #800080; */
              /* --animation-color: #37FF8B; */
              /* --animation-color: #BF40BF; */
              --animation-color: #fff;
              --fs-size: 2em;
              letter-spacing: 3px;
              text-decoration: none;
              font-size: var(--fs-size);
              font-family: "Arial";
              position: relative;
              text-transform: uppercase;
              color: transparent;
              -webkit-text-stroke: 1px var(--text-stroke-color);
            }
            /* this is the text, when you hover on button */
            .hover-text {
              position: absolute;
              box-sizing: border-box;
              content: attr(data-text);
              color: var(--animation-color);
              width: 0%;
              inset: 0;
              border-right: var(--border-right) solid var(--animation-color);
              overflow: hidden;
              transition: 0.5s;
              -webkit-text-stroke: 1px var(--animation-color);
            }
            /* hover */
            .button:hover .hover-text {
              width: 100%;
              filter: drop-shadow(0 0 23px var(--animation-color))
            }
        </style>
    </head>
	<body>
		<button data-text="Awesome" class="button">
			<span class="actual-text">&nbsp;Playflix&nbsp;</span>
			<span class="hover-text" aria-hidden="true">&nbsp;Playflix&nbsp;</span>
		</button>
	</body>
</html>
