<?php
/**
 * @package Frank
 */
/*
Template Name: Iconic Page Template
*/
?>
<?php get_header(); ?>
<div class="banner">

			</div>
<div class="content fullspread">
	<main class="content-primary" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="p<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="post-header row">
				<h1 class="post-title"><?php the_title(); ?></h1>
			</header>
			<div class="content-main row">
				<section class="post-content">






<!-- CUSTOM CODE STARTS HERE -->


<h2 id="page_title"><span class='title'>Iconic</span> is an open source icon set consisting of 171 marks in raster, vector and font formats.</h2>

<section class="row">
	<div class="span4 column-centered">
		<a class='button download alt' href='https://github.com/downloads/somerandomdude/Iconic/iconic.zip'>Download Iconic</a><small class='license'>Or <a href='https://github.com/somerandomdude/Iconic'>fork it on Github</a>.</small>
		<a href="#">Preview the icon set</a>
	</div>
</section>

<section id='info' class="row">
<div class="span12">
<p>Iconic is a lot more than just icons. It aims to be the most forward-thinking icon set around based on its support of forward facing display/deployment methods. Icons should not just be clear and attractive, they should be easy and flexible to work with.</p>
</div>
</section>
<section id="features" class="row">
		<div class="span8 column-centered">
			<div class="row">
			<div class='span6'>
<h3>Minimal, stylized design</h3>
<p>Iconic is intended to be a simple yet unique in form. Alternatives for several marks have been added for greater choice in style.</p>
<h3>All the formats you need</h3>
<p>Iconic comes in <strong>PNG, SVG, SWC, OFT/TTF/EOT and  Omnigraffle stencil formats</strong> as well as the tools used  to generate them.</p>
</div>
<div class='span6'>
<h3>High size flexibility</h3>
<p>High legibility over a large scale range is a big priority for Iconic. Nearly all the icons will work from 8 pixels to infinity (and beyond).</p>
<h3>A full generator suite</h3>
<p>Iconic comes with JSX and Python scripts to allow you to build your own PNG, SVG and font files however you would like.</p>
</div>
<div class='span12'>
<h3>Open source &amp; free</h3>
<p name="hl7kx"><a href='https://github.com/somerandomdude/Iconic'>Iconic is available on GitHub</a>. The icons licensed as <a href="http://creativecommons.org/licenses/by-sa/3.0/us/">Creative Commons Share Alike 3.0</a> and all generator scripts are licensed as GPL.</p>
</div>
	</div>
</div>

</section>

<section id="other_projects">
<h1>Other projects</h1>
<ul id='projects_list' class="row">
<li class='span4 design'>
<div>
<h3><a href='/work/cue' id="cue"><small>Cue</small></a></h3>
<p name="s70uw"> Cue is a public domain gestural icon system which focuses on legibility and symbolic representation.</p>
</div>
</li>
<li class='span4 design'>
<div>
<h3><a href="/work/bitcons/" id="projects_bitcons"><small>Bitcons</small></a></h3>
<p name="65zbc">Bitcons is a pixel icon set available in various colors/sizes and completely free to use.</p>
</div>
</li>
<li class='span4 design'>
<div>
<h3><a href="/work/sanscons/" id="projects_sanscons"><small>Sanscons</small></a></h3>
<p name="0c8yk">Sanscons is a CSS-friendly version of Bitcons — allowing you to set custom backgrounds on your icons.</p>
</div>
</li>
</ul>
</section>
<style>
#page_title, #info {
	margin-top: 3rem;
	margin-bottom: 3rem;
}

#info {
	font-size: 1.2em;
}

#features {
	font-size:.8em;
}
.post-title {
	display: none;
}
.banner { background-size: cover; height:300px; background-image:url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTQ1MHB4IiBoZWlnaHQ9IjIxMDBweCI+DQo8cmVjdCBmaWxsPSIjRjBFQUVBIiB3aWR0aD0iMTQ1MCIgaGVpZ2h0PSIyMTAwIi8+CQ0KPHBvbHlnb24gZmlsbD0iIzNEMzAyRiIgcG9pbnRzPSI1MDgsNzAgNDcyLDk0IDQ4MSwxMDAgNDYwLDExOCA0OTYsMTAwIDQ4Nyw5NCAiLz4NCjxwb2x5Z29uIGZpbGw9IiMzRDMwMkYiIHBvaW50cz0iNzI0LjExNyw5My4xODYgNzQ4LDgxLjg3NyA3NDgsNzYgNzAwLDc2IDcwMCw4MS44NTUgIi8+DQo8cG9seWdvbiBmaWxsPSIjM0QzMDJGIiBwb2ludHM9IjcyNC4xMzEsOTkuODE4IDcwMCw4OC40ODMgNzAwLDExMiA3NDgsMTEyIDc0OCw4OC41MTYgIi8+DQo8cG9seWdvbiBmaWxsPSIjM0QzMDJGIiBwb2ludHM9IjI2NSwxMDYuNTk4IDI1Mi4zOTEsOTQgMjY1LDgxLjQwMiAyNTYuNTk5LDczIDI0NCw4NS42MDQgMjMxLjM5Niw3MyAyMjMsODEuNDAyIDIzNS41OTksOTQgICAyMjMsMTA2LjU5OCAyMzEuMzk2LDExNSAyNDQsMTAyLjM5NiAyNTYuNTk5LDExNSAiLz4NCjxwb2x5Z29uIGZpbGw9IiMzRDMwMkYiIHBvaW50cz0iMzU3LjkxMiwxMTMuMzE1IDM0MCw5NS40MDMgMzQ4LjU0NCw4Ni44NiAzNTcuOTEyLDk2LjIyOSAzNzkuNDU4LDc0LjY4NSAzODgsODMuMjI4ICAgMzU3LjkxMiwxMTMuMzE1ICIvPg0KPHBhdGggZmlsbD0iIzNEMzAyRiIgZD0iTTgzOS45MTYsNzBIODIwdjE5LjkxNkw4NDguMDc4LDExOFY5OC4wODRIODY4TDgzOS45MTYsNzB6IE04MzAuOTY5LDg2LjY4MiAgYy0zLjE1MiwwLTUuNzA3LTIuNTU1LTUuNzA3LTUuNzA3czIuNTU1LTUuNzA3LDUuNzA3LTUuNzA3czUuNzA3LDIuNTU1LDUuNzA3LDUuNzA3UzgzNC4xMjEsODYuNjgyLDgzMC45NjksODYuNjgyeiIvPg0KPGNpcmNsZSBmaWxsPSIjM0QzMDJGIiBjeD0iMTA2LjAwMSIgY3k9IjExMiIgcj0iNi4wMDEiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0xMDkuMDM1LDEwMC4wMDZjNC45NjMsMCw5LDQuMDM3LDksOS4wMDZoNi4wMDJjMC04LjI3My02LjczLTE1LjAxLTE1LjAwMi0xNS4wMVYxMDAuMDA2eiIvPg0KPHBhdGggZmlsbD0iIzNEMzAyRiIgZD0iTTEwOC45OTQsODguMDAxYzExLjU3OCwwLDIxLjAwNCw5LjQyNiwyMS4wMDQsMjEuMDFoNmMwLTE0Ljg5NS0xMi4xMTMtMjcuMDEtMjcuMDA0LTI3LjAxVjg4LjAwMXoiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0xMDguOTk0LDc2QzEyNy4xOTMsNzYsMTQyLDkwLjgwNywxNDIsMTA5LjAxMmg2QzE0OCw4Ny40OTgsMTMwLjUwMiw3MCwxMDguOTk0LDcwVjc2eiIvPg0KPHBvbHlnb24gZmlsbD0iIzNEMzAyRiIgcG9pbnRzPSI2MTUuODc3LDc2IDYxNS44NzcsNzAgNjA5Ljg3Nyw3MCA2MDkuODc3LDc2IDU5Ny44NzcsNzYgNTk3Ljg3Nyw3MCA1OTEuODc3LDcwIDU5MS44NzcsNzYgNTgwLDc2ICAgNTgwLDgyIDU5MS44NzcsODIgNTk3Ljg3Nyw4MiA2MDkuODc3LDgyIDYxNS44NzcsODIgNjI4LDgyIDYyOCw3NiAiLz4NCjxyZWN0IHg9IjU4NiIgeT0iMTAwIiBmaWxsPSIjM0QzMDJGIiB3aWR0aD0iMzYiIGhlaWdodD0iNiIvPg0KPHJlY3QgeD0iNTg2IiB5PSI4OCIgZmlsbD0iIzNEMzAyRiIgd2lkdGg9IjM2IiBoZWlnaHQ9IjYiLz4NCjxwb2x5Z29uIGZpbGw9IiMzRDMwMkYiIHBvaW50cz0iNjE2LDExOCA1ODYsMTE4IDU4NiwxMTIgNjIyLDExMiAiLz4NCjxwb2x5Z29uIGZpbGw9IiMzRDMwMkYiIHBvaW50cz0iNjI4LDE5Ni4wMDEgNTgwLDE5Ni4wMDEgNTgwLDE5MC4wMDEgNjI4LDE5MC4wMDEgNjI4LDE5Ni4wMDEgIi8+DQo8cG9seWdvbiBmaWxsPSIjM0QzMDJGIiBwb2ludHM9IjYxMCwyMDguMDAxIDU4MCwyMDguMDAxIDU4MCwyMDIuMDAxIDYxMCwyMDIuMDAxIDYxMCwyMDguMDAxICIvPg0KPHBvbHlnb24gZmlsbD0iIzNEMzAyRiIgcG9pbnRzPSI2MjgsMjI1Ljk5OSA1ODAsMjI1Ljk5OSA1ODAsMjIwLjAwMSA2MjgsMjIwLjAwMSA2MjgsMjI1Ljk5OSAiLz4NCjxwb2x5Z29uIGZpbGw9IiMzRDMwMkYiIHBvaW50cz0iNjE2LDIzNy45OTkgNTgwLDIzNy45OTkgNTgwLDIzMS45OTkgNjE2LDIzMS45OTkgNjE2LDIzNy45OTkgIi8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNNjI4LDIzNC45OTljMCwxLjY1OC0xLjM0OCwzLTMsM2MtMS42NjQsMC0zLjAwNi0xLjM0Mi0zLjAwNi0zYzAtMS42NTUsMS4zNDItMywzLjAwNi0zICBDNjI2LjY1MiwyMzEuOTk5LDYyOCwyMzMuMzQzLDYyOCwyMzQuOTk5eiIvPg0KPHBhdGggZmlsbD0iIzNEMzAyRiIgZD0iTTEzMywxOTB2NS44MTJjMCwyLjQwMi0wLjkzOCw0LjY2NC0yLjYzMiw2LjM1N2wtMTYuOTczLDE2Ljg4MWMtMi42ODQsMi42NzUtNC4xNiw2LjE5LTQuMzI0LDkuOTQ5SDEwM2w5LDkgIGw5LTloLTUuOTM3YzAuMTYtMi4xNTYsMS4wMjctNC4xNiwyLjU2Mi01LjcwN2wxNi45OC0xNi44NzVjMi44MzYtMi44MzYsNC4zOTUtNi41OTgsNC4zOTUtMTAuNjA1VjE5MEgxMzN6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNMTM4LjkzLDIyOWMtMC4xNjQtMy43NTktMS42NDgtNy4yNzQtNC4zMzYtOS45NjFsLTMuMzQtMy4zMjJMMTI3LDIxOS45NDRsMy4zNjMsMy4zNDkgIGMxLjU0NywxLjU0MSwyLjQxNCwzLjU1MSwyLjU2Niw1LjcwN0gxMjdsOSw5bDktOUgxMzguOTN6Ii8+DQo8cmVjdCB4PSIxMTgwIiB5PSI4OCIgZmlsbD0iIzNEMzAyRiIgd2lkdGg9IjQ4IiBoZWlnaHQ9IjMwIi8+DQo8cG9seWdvbiBmaWxsPSIjM0QzMDJGIiBwb2ludHM9IjEyMDcsODIgMTIyOCw4MiAxMjIyLDcwIDEyMDcsNzAgIi8+DQo8cG9seWdvbiBmaWxsPSIjM0QzMDJGIiBwb2ludHM9IjEyMDEsNzAgMTE4Niw3MCAxMTgwLDgyIDEyMDEsODIgIi8+DQo8cG9seWdvbiBmaWxsPSIjM0QzMDJGIiBwb2ludHM9IjM3My4yMDQsMjE5LjQzOCAzODgsMjA4IDM3MCwyMDggMzY0LDE5MCAzNTgsMjA4IDM0MCwyMDggMzU0LjgxMiwyMTkuMzkxIDM0OSwyMzggMzY0LjAyMywyMjYuNDggICAgMzc5LjAxMiwyMzgiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik03NDgsMjM1YzAsMS42NTgtMS4zMzYsMy0zLDNoLTQyYy0xLjY1OCwwLTMtMS4zNDItMy0zdi0yN2g0OFYyMzV6Ii8+DQo8cG9seWdvbiBmaWxsPSIjM0QzMDJGIiBwb2ludHM9IjcxOCwxOTYuMDA2IDcxOCwxOTAgNzAwLDE5MCA3MDAsMjAyIDc0OCwyMDIgNzQ4LDE5Ni4wMDYgIi8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNMTMzOC44MjQsMTk5LjEyOWwtNC4yMyw0LjI0N2MyLjgzNiwyLjgzNiw0LjQwNiw2LjYwOSw0LjQwNiwxMC42MjVjMCw4LjI3My02LjcyNywxNS0xNSwxNXYtM2wtNiw2bDYsNnYtMyAgYzExLjU3OCwwLDIxLTkuNDIyLDIxLTIxQzEzNDUsMjA4LjM4MiwxMzQyLjgwOSwyMDMuMTAyLDEzMzguODI0LDE5OS4xMjl6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNMTMzMCwxOTZsLTYtNnYzYy0xMS41NzgsMC0yMSw5LjQyMi0yMSwyMWMwLDUuNjE4LDIuMTkxLDEwLjg5OCw2LjE3NiwxNC44NzFsNC4yMy00LjI0NyAgYy0yLjgzNi0yLjgzNi00LjQwNi02LjYwOS00LjQwNi0xMC42MjVjMC04LjI3Myw2LjcyNy0xNSwxNS0xNXYzTDEzMzAsMTk2eiIvPg0KPHBhdGggZmlsbD0iIzNEMzAyRiIgZD0iTTQ4MC42MSwyMTkuMDk4bC0xNS4wMDktMTVjLTcuNDY4LDguNjMxLTcuNDY4LDIxLjM2OSwwLDMwTDQ4MC42MSwyMTkuMDk4eiIvPg0KPHBhdGggZmlsbD0iIzNEMzAyRiIgZD0iTTQ5MCwxOTYuMjM3djIxLjk3bC0xNS41MjcsMTUuNTMzYzMuNDkyLDIuNjA3LDcuNzM0LDQuMjYsMTIuNDMxLDQuMjZjMTEuNjUxLDAsMjEuMDk3LTkuNDM0LDIxLjA5Ny0yMS4wODggIEM1MDgsMjA2LjMyNCw1MDAuMTU3LDE5Ny43NDYsNDkwLDE5Ni4yMzd6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNNDg0LDIxNC4wMjNWMTkwYy02LjU0MiwwLjQwNC0xMi40NDUsMi45MDYtMTcuMjE1LDYuODA2TDQ4NCwyMTQuMDIzeiIvPg0KPHBvbHlnb24gZmlsbD0iIzNEMzAyRiIgcG9pbnRzPSIxMDYwLDIyNS45OTkgMTA4NCwyMzEuOTk5IDExMDgsMjI1Ljk5OSAxMTA4LDIzMS45OTkgMTA4NCwyMzcuOTk5IDEwNjAsMjMxLjk5OSAiLz4NCjxwb2x5Z29uIGZpbGw9IiMzRDMwMkYiIHBvaW50cz0iMTA2MCwyMTQuMDAxIDEwODQsMjIwLjAwMSAxMTA4LDIxNC4wMDEgMTEwOCwyMjAuMDAxIDEwODQsMjI1Ljk5OSAxMDYwLDIyMC4wMDEgIi8+DQo8cG9seWdvbiBmaWxsPSIjM0QzMDJGIiBwb2ludHM9IjEwNjAsMjAyLjAwMSAxMDg0LDIwOC4wMDEgMTEwOCwyMDIuMDAxIDExMDgsMjA4LjAwMSAxMDg0LDIxNC4wMDEgMTA2MCwyMDguMDAxICIvPg0KPHBvbHlnb24gZmlsbD0iIzNEMzAyRiIgcG9pbnRzPSIxMDYwLDE5MC4wMDEgMTA4NCwxOTYuMDAxIDExMDgsMTkwLjAwMSAxMTA4LDE5Ni4wMDEgMTA4NCwyMDIuMDAxIDEwNjAsMTk2LjAwMSAiLz4NCjxyZWN0IHg9Ijg1NiIgeT0iMTkwIiBmaWxsPSIjM0QzMDJGIiB3aWR0aD0iMTIiIGhlaWdodD0iNDgiLz4NCjxyZWN0IHg9IjgzOCIgeT0iMjAyIiBmaWxsPSIjM0QzMDJGIiB3aWR0aD0iMTIiIGhlaWdodD0iMzYiLz4NCjxyZWN0IHg9IjgyMCIgeT0iMjE0IiBmaWxsPSIjM0QzMDJGIiB3aWR0aD0iMTIiIGhlaWdodD0iMjQiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik05NjQsMTkwYy02LjYyNywwLTEyLDUuMzczLTEyLDEyczEyLDM2LDEyLDM2czEyLTI5LjM3MywxMi0zNlM5NzAuNjI3LDE5MCw5NjQsMTkweiBNOTY0LDIwOCAgYy0zLjMxMSwwLTYtMi42ODctNi02czIuNjg5LTYsNi02czYsMi42ODcsNiw2Uzk2Ny4zMTEsMjA4LDk2NCwyMDh6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNMTI0LDMyMmMtNi42MzMsMC0xMiw1LjM3My0xMiwxMnM1LjM2NywxMiwxMiwxMmM2LjYyMSwwLDEyLTUuMzczLDEyLTEyUzEzMC42MjEsMzIyLDEyNCwzMjJMMTI0LDMyMnoiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0xMjcsMzEzYzAsMS42NTgtMS4zNDgsMy0zLDNjLTEuNjY0LDAtMy0xLjM0Mi0zLTNzMS4zMzYtMywzLTNDMTI1LjY1MiwzMTAsMTI3LDMxMS4zNDIsMTI3LDMxM3oiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0xMTEuMTIxLDMxNi44NzljMS4xNzIsMS4xNzIsMS4xNzIsMy4wNywwLDQuMjQyYy0xLjE3MiwxLjE3NS0zLjA3LDEuMTcyLTQuMjQyLDBzLTEuMTcyLTMuMDY3LDAtNC4yNDIgIEMxMDguMDUxLDMxNS43MDcsMTA5Ljk0OSwzMTUuNzA3LDExMS4xMjEsMzE2Ljg3OXoiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0xMDMsMzMwLjk5N2MxLjY1MiwwLDMsMS4zNDIsMywzYzAsMS42NjEtMS4zNDgsMy0zLDNjLTEuNjY0LDAtMy0xLjMzOS0zLTMgIEMxMDAsMzMyLjMzOSwxMDEuMzM2LDMzMC45OTcsMTAzLDMzMC45OTd6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNMTA2Ljg3OSwzNDYuODc5YzEuMTcyLTEuMTcyLDMuMDctMS4xNzIsNC4yNDIsMGMxLjE3MiwxLjE3NSwxLjE3MiwzLjA3LDAsNC4yNDJzLTMuMDcsMS4xNzUtNC4yNDIsMCAgQzEwNS43MDcsMzQ5Ljk0OSwxMDUuNzA3LDM0OC4wNTEsMTA2Ljg3OSwzNDYuODc5eiIvPg0KPHBhdGggZmlsbD0iIzNEMzAyRiIgZD0iTTEyMSwzNTQuOTk3YzAtMS42NTgsMS4zMzYtMywzLTNjMS42NjQsMC4wMDMsMywxLjM0MiwzLDNjMCwxLjY2MS0xLjMzNiwzLjAwMy0zLDMuMDAzICBTMTIxLDM1Ni42NTgsMTIxLDM1NC45OTd6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNMTM2Ljg5MSwzNTEuMTIxYy0xLjE3Mi0xLjE3Mi0xLjE3Mi0zLjA2NywwLTQuMjQyYzEuMTcyLTEuMTcyLDMuMDctMS4xNzIsNC4yNDIsMCAgYzEuMTg0LDEuMTc1LDEuMTg0LDMuMDcsMCw0LjI0MkMxMzkuOTYxLDM1Mi4yOTYsMTM4LjA2MiwzNTIuMjk2LDEzNi44OTEsMzUxLjEyMXoiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0xNDQuOTk0LDMzNi45OTdjLTEuNjQ2LDAtMi45OTQtMS4zNDItMi45OTQtMi45OTdjMC0xLjY2NCwxLjM0OC0zLDMuMDEyLTNjMS42NDUsMCwzLDEuMzM5LDIuOTgyLDIuOTk3ICBDMTQ4LjAxMiwzMzUuNjU4LDE0Ni42NTcsMzM3LDE0NC45OTQsMzM2Ljk5N3oiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0xNDEuMTMzLDMyMS4xMjRjLTEuMTcyLDEuMTY5LTMuMDcsMS4xNjktNC4yNDIsMGMtMS4xNzItMS4xNzgtMS4xNzItMy4wNywwLTQuMjQ1ICBjMS4xNzItMS4xNjksMy4wNy0xLjE3Miw0LjI0MiwwLjAwM0MxNDIuMzE2LDMxOC4wNTQsMTQyLjMxNiwzMTkuOTU1LDE0MS4xMzMsMzIxLjEyNHoiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0xMjE2LDIwNWMtMC41NjgsMC0xLjEwNywwLjA5NC0xLjY1NCwwLjE2NGMtMi4wODYtMy42OTEtNS45NTMtNi4xNjQtMTAuMzQ2LTYuMTY0ICBjLTQuNDgyLDAtOC4zNSwyLjQ5Ni0xMC40MTIsNi4xNTJjLTAuNTIzLTAuMDctMS4wNTUtMC4xNTItMS41ODgtMC4xNTJjLTYuNjE1LDAtMTIsNS4zNzktMTIsMTJzNS4zODUsMTIsMTIsMTJoMjQgIGM2LjYxOSwwLDEyLTUuMzc5LDEyLTEyUzEyMjIuNjE5LDIwNSwxMjE2LDIwNXogTTEyMTYsMjIzaC0yNGMtMy4zMTEsMC02LTIuNjk1LTYtNmMwLTMuMjkzLDIuOTE2LTUuODI0LDYuMDEtNS45MTggIGMwLjAwOCwxLjQxOCwwLjI1OCwyLjgwMSwwLjc1LDQuMTEzbDUuNjE1LTIuMDk4Yy0wLjI0OC0wLjY2OC0wLjM3NS0xLjM3MS0wLjM3NS0yLjA5OGMwLTMuMzA1LDIuNjg5LTYsNi02ICBjMS45MzksMCwzLjY5NywwLjk2MSw0Ljc5OSwyLjQ2MWMtMi44OTEsMi4xOTEtNC43OTksNS42MzEtNC43OTksOS41MzloNmMwLTMuMzA1LDIuNjg5LTYsNi02YzMuMzE0LDAsNiwyLjY5NSw2LDYgIFMxMjE5LjMxNCwyMjMsMTIxNiwyMjN6Ii8+DQo8cG9seWdvbiBmaWxsPSIjM0QzMDJGIiBwb2ludHM9Ijk0MCw3NiA5NDAsMTEyIDk1OCw5NCA5NTgsNzYgIi8+DQo8cG9seWdvbiBmaWxsPSIjM0QzMDJGIiBwb2ludHM9Ijk3MCw3NiA5NzAsMTEyIDk4OCw5NCA5ODgsNzYgIi8+DQo8cG9seWdvbiBmaWxsPSIjM0QzMDJGIiBwb2ludHM9IjExMDgsODggMTA5MCw4OCAxMDkwLDcwIDEwNzgsNzAgMTA3OCw4OCAxMDYwLDg4IDEwNjAsMTAwIDEwNzgsMTAwIDEwNzgsMTE4IDEwOTAsMTE4IDEwOTAsMTAwICAgMTEwOCwxMDAgIi8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNMjUyLjQxNCwxOTBIMjIwdjQ4bDExLjk2Ni05Ljk2MUwyNDMuOTksMjM4bDEyLjAxLTkuOTQ1TDI2OCwyMzh2LTMyLjU0OUwyNTIuNDE0LDE5MHogTTI0NywyMTF2LTE1bDE1LDE1ICBIMjQ3eiIvPg0KPHBvbHlnb24gZmlsbD0iIzNEMzAyRiIgcG9pbnRzPSIxMzMzLjg3OSwxMDguMTIxIDEzNDMuNzU4LDExOCAxMzQ4LDExMy43NTggMTMzOC4xMjEsMTAzLjg3OSAxMzQyLDEwMCAxMzMwLDEwMCAxMzMwLDExMiAiLz4NCjxwb2x5Z29uIGZpbGw9IiMzRDMwMkYiIHBvaW50cz0iMTMwOS44Miw4NC4wNTcgMTMwNiw4OCAxMzE3Ljk0MSw4Ny45MzYgMTMxOCw3NiAxMzE0LjA2Miw3OS44MTQgMTMwNC4yNDIsNzAgMTMwMCw3NC4yNDIgIi8+DQo8cG9seWdvbiBmaWxsPSIjM0QzMDJGIiBwb2ludHM9IjEzMDAsMTEzLjc1OCAxMzA0LjI0MiwxMTggMTMxNC4xMjEsMTA4LjEyMSAxMzE4LDExMiAxMzE4LDEwMCAxMzA2LDEwMCAxMzA5Ljg3OSwxMDMuODc5ICIvPg0KPHBvbHlnb24gZmlsbD0iIzNEMzAyRiIgcG9pbnRzPSIxMzQyLjA0Nyw4OCAxMzM4LjE1Niw4NC4xMDYgMTM0OCw3NC4yNTcgMTM0My43NDYsNzAgMTMzMy44OTEsNzkuODUgMTMzMCw3NS45NTYgMTMzMCw4OCAiLz4NCjxwb2x5Z29uIGZpbGw9IiMzRDMwMkYiIHBvaW50cz0iMjQ3LDM0MCAyNDcsMzQ5IDI1MywzNDkgMjQ0LDM1OCAyMzUsMzQ5IDI0MSwzNDkgMjQxLDM0MCAiLz4NCjxwb2x5Z29uIGZpbGw9IiMzRDMwMkYiIHBvaW50cz0iMjUwLDMzMSAyNTkuMDEzLDMzMSAyNTkuMDEzLDMyNS4wOTQgMjY4LDMzNCAyNTkuMDEzLDM0MyAyNTkuMDEzLDMzNyAyNTAsMzM3ICIvPg0KPHBvbHlnb24gZmlsbD0iIzNEMzAyRiIgcG9pbnRzPSIyNDEsMzI4IDI0MSwzMTkgMjM1LDMxOSAyNDQsMzEwIDI1MywzMTkgMjQ3LDMxOSAyNDcsMzI4ICIvPg0KPHBvbHlnb24gZmlsbD0iIzNEMzAyRiIgcG9pbnRzPSIyMzgsMzM3IDIyOSwzMzcgMjI5LDM0MyAyMjAsMzM0IDIyOSwzMjUuMDk0IDIyOSwzMzEgMjM4LDMzMSAiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0zNzYuOTQ5LDM0My4yNzVjLTEyLjI4MSwwLTIyLjIzLTkuOTU1LTIyLjIzLTIyLjIzYzAtNC4wNDMsMS4xNi03Ljc4MSwzLjA0Ny0xMS4wNDUgICBDMzQ3LjUyMywzMTIuOTUzLDM0MCwzMjIuMjgxLDM0MCwzMzMuNDY3QzM0MCwzNDcuMDE0LDM1MC45OCwzNTgsMzY0LjUyNywzNThjMTEuMTgzLDAsMjAuNTItNy41MzUsMjMuNDczLTE3Ljc2NiAgIEMzODQuNzMsMzQyLjExNSwzODAuOTkyLDM0My4yNzUsMzc2Ljk0OSwzNDMuMjc1eiIvPg0KPHBhdGggZmlsbD0iIzNEMzAyRiIgZD0iTTUwNi4yNDMsMzExLjc1NmMtMi4zNDQtMi4zNDEtNi4xNDEtMi4zNDEtOC40ODQsMGwtMjIuNjg4LDIyLjY5OWMyLjAyNiwwLjUyNCwzLjkwMSwxLjU0NCw1LjQyNCwzLjA2NyAgYzEuNTQ3LDEuNTQ3LDIuNTMxLDMuNDM0LDMuMDYsNS40MTFsMjIuNjg4LTIyLjY5QzUwOC41ODYsMzE3LjksNTA4LjU4NiwzMTQuMSw1MDYuMjQzLDMxMS43NTZ6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNNDc2LjI1MywzNTAuMjQ3YzIuMzQ0LTIuMzQ0LDIuMzQ0LTYuMTQxLDAtOC40ODFjLTIuMzQ0LTIuMzQ0LTYuMTQxLTIuMzQ0LTguNDg0LDBMNDYwLDM1Ny45OTkgIEw0NzYuMjUzLDM1MC4yNDd6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNNjI4LDMxMGgtMzZ2MTEuOTk3Yy00LjM1OSwwLTEyLDAtMTIsMC4wMDN2MzZoMzZ2LTEyaDEyVjMxMHogTTYxMCwzNTJoLTI0di0xOGg2djEyaDE4ICBDNjEwLDM0OC42ODgsNjEwLDM1MS45OTcsNjEwLDM1MnogTTYyMiwzNDBoLTI0di0xOGgyNFYzNDB6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNNzQ4LDMzNi45NTN2LTZsLTcuMTcyLTIuOTg4Yy0wLjE5OS0wLjU2Mi0wLjQxLTEuMTA0LTAuNjY4LTEuNjQxbDIuODk1LTcuMjA3bC00LjI0Mi00LjI0MmwtNy4xNDQsMi45NDEgIGMtMC41NDQtMC4yNjEtMS4xMDItMC40ODMtMS42NzYtMC42OTFsLTMuMDQtNy4xMjVoLTZsLTIuOTY1LDcuMTAyYy0wLjU5OCwwLjIxMS0xLjE3MiwwLjQzNC0xLjc0MSwwLjcwM2wtNy4xMy0yLjg2MmwtNC4yNDIsNC4yNDIgIGwyLjkwNiw3LjA2NmMtMC4yODEsMC41NzctMC41MTEsMS4xNzItMC43MjcsMS43ODFMNzAwLDMzMS4wNDd2Nmw3LjA2LDIuOTQxYzAuMjE4LDAuNjA5LDAuNDUyLDEuMjA0LDAuNzMzLDEuNzgxbC0yLjg1NCw3LjExMyAgbDQuMjQyLDQuMjQybDcuMDg1LTIuOTE4YzAuNTY3LDAuMjcsMS4xNDgsMC40ODksMS43NDYsMC42OTFsMy4wMzUsNy4xMDJoNmwyLjk3LTcuMTM3YzAuNTY5LTAuMjExLDEuMTMyLTAuNDM0LDEuNjcxLTAuNjkxICBsNy4xOTUsMi44ODNsNC4yNDItNC4yNDJsLTIuOTUzLTcuMTZjMC4yNTEtMC41MzksMC40NTctMS4wODEsMC42NTYtMS42NDFMNzQ4LDMzNi45NTN6IE03MjMuOTUzLDM0M2MtNC45NjksMC05LTQuMDMxLTktOSAgczQuMDMxLTksOS05czksNC4wMzEsOSw5UzcyOC45MjIsMzQzLDcyMy45NTMsMzQzeiIvPg0KPHBhdGggZmlsbD0iIzNEMzAyRiIgZD0iTTg0NCwzMTZjLTEzLjI1NCwwLTI0LDE3Ljc2Ni0yNCwxNy43NjZTODMwLjc0NiwzNTIsODQ0LDM1MnMyNC0xOC4yMzQsMjQtMTguMjM0Uzg1Ny4yNTQsMzE2LDg0NCwzMTZ6ICAgTTg0NCwzNDZjLTYuNjI3LDAtMTItNS4zNzMtMTItMTJjMC02LjYyNCw1LjM3My0xMiwxMi0xMnMxMiw1LjM3NiwxMiwxMkM4NTYsMzQwLjYyNyw4NTAuNjI3LDM0Niw4NDQsMzQ2eiIvPg0KPGNpcmNsZSBmaWxsPSIjM0QzMDJGIiBjeD0iODQ0IiBjeT0iMzM0LjAyMyIgcj0iNiIvPg0KPHJlY3QgeD0iOTQ2IiB5PSIzNTEuMTQyIiBmaWxsPSIjM0QzMDJGIiB3aWR0aD0iMzYiIGhlaWdodD0iNi44NTgiLz4NCjxwb2x5Z29uIGZpbGw9IiMzRDMwMkYiIHBvaW50cz0iOTcwLDMzNy40MjggOTcwLDMxMCA5NTgsMzEwIDk1OCwzMzcuNDI4IDk1MiwzMzcuNDI4IDk2NC4wMTgsMzUxLjE0MiA5NzYsMzM3LjQyOCAiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0xMDg0LDMxMGMtMTMuMjU0LDAtMjQsMTAuNzQ2LTI0LDI0czEwLjc0NiwyNCwyNCwyNHMyNC0xMC43NDYsMjQtMjRTMTA5Ny4yNTQsMzEwLDEwODQsMzEweiBNMTA4NCwzMTYgIGMzLjg4NSwwLDcuNDU5LDEuMjY2LDEwLjQsMy4zNjNsLTI1LjA0MywyNS4wMzFjLTIuMDk4LTIuOTQxLTMuMzU3LTYuNTE2LTMuMzU3LTEwLjM5NUMxMDY2LDMyNC4wNzQsMTA3NC4wNzQsMzE2LDEwODQsMzE2eiAgIE0xMDg0LDM1MmMtMy44ODUsMC03LjQ1OS0xLjI2Ni0xMC40LTMuMzYzbDI1LjA0My0yNS4wMzFjMi4wOTgsMi45NDEsMy4zNTcsNi41MTYsMy4zNTcsMTAuMzk1ICBDMTEwMiwzNDMuOTI2LDEwOTMuOTI2LDM1MiwxMDg0LDM1MnoiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0xMjI4LDMyOC4wMDFoLTZWMzI1YzAtMS42NDYtMS4zNDUtMy0zLTNoLTM2Yy0xLjY0OSwwLTMsMS4zNTQtMywzdjE4LjAwM2MwLDEuNjQ5LDEuMzUxLDIuOTk3LDMsMi45OTdoMzYgIGMxLjY1NSwwLDMtMS4zNDgsMy0yLjk5N1YzNDBoNlYzMjguMDAxeiIvPg0KPHBhdGggZmlsbD0iIzNEMzAyRiIgZD0iTTEzMjQsMzE4Ljc2NmMtMi40Mi0zLjM5OC02LjE5My01Ljc2Ni0xMC42Ny01Ljc2NmMtNy4zNTQsMC0xMy4zMyw1Ljk4OC0xMy4zMywxMy4zMzZ2MS4xMDJMMTMyNC4wMTEsMzU1ICAgTDEzNDgsMzI3LjQzOHYtMS4xMDJjMC03LjM0OC01Ljk3Ny0xMy4zMzYtMTMuMzI1LTEzLjMzNkMxMzMwLjE5OCwzMTMsMTMyNi40MjUsMzE1LjM2NywxMzI0LDMxOC43NjZ6Ii8+DQo8cGF0aCBkPSJNMzY0LDYwMGMtMTMuMjU0LDAtMjQsMTAuNzQ2LTI0LDI0czEwLjc0NiwyNCwyNCwyNHMyNC0xMC43NDYsMjQtMjRTMzc3LjI1NCw2MDAsMzY0LDYwMHogTTM2MC4yNzksNjM1LjA3M2wtMTEuMDM5LTExLjA0MyAgbDQuMjQyLTQuMjQybDYuNzk3LDYuODAxbDE0LjQyNi0xNC40MjZsNC4yNDIsNC4yNDJMMzYwLjI3OSw2MzUuMDczeiIvPg0KPHBhdGggZmlsbD0iIzRENEQ0RCIgZD0iTTQyNCw2MDBjLTEzLjI1NCwwLTI0LDEwLjc0Ni0yNCwyNHMxMC43NDYsMjQsMjQsMjRzMjQtMTAuNzQ2LDI0LTI0UzQzNy4yNTQsNjAwLDQyNCw2MDB6IE00MjAuMjc5LDYzNS4wNzMgIGwtMTEuMDM5LTExLjA0M2w0LjI0Mi00LjI0Mmw2Ljc5Nyw2LjgwMWwxNC40MjYtMTQuNDI2bDQuMjQyLDQuMjQyTDQyMC4yNzksNjM1LjA3M3oiLz4NCjxwYXRoIGZpbGw9IiNBOUFCQUUiIGQ9Ik00ODQsNjAwYy0xMy4yNTQsMC0yNCwxMC43NDYtMjQsMjRzMTAuNzQ2LDI0LDI0LDI0czI0LTEwLjc0NiwyNC0yNFM0OTcuMjU0LDYwMCw0ODQsNjAweiBNNDgwLjI3OSw2MzUuMDczICBsLTExLjAzOS0xMS4wNDNsNC4yNDItNC4yNDJsNi43OTcsNi44MDFsMTQuNDI2LTE0LjQyNmw0LjI0Miw0LjI0Mkw0ODAuMjc5LDYzNS4wNzN6Ii8+DQo8cGF0aCBmaWxsPSIjRTFEMEQwIiBkPSJNNTQ0LDYwMGMtMTMuMjU0LDAtMjQsMTAuNzQ2LTI0LDI0czEwLjc0NiwyNCwyNCwyNHMyNC0xMC43NDYsMjQtMjRTNTU3LjI1NCw2MDAsNTQ0LDYwMHogTTU0MC4yNzksNjM1LjA3MyAgbC0xMS4wMzktMTEuMDQzbDQuMjQyLTQuMjQybDYuNzk3LDYuODAxbDE0LjQyNi0xNC40MjZsNC4yNDIsNC4yNDJMNTQwLjI3OSw2MzUuMDczeiIvPg0KPHBhdGggZmlsbD0iIzVENEY0RCIgZD0iTTYwNCw2MDBjLTEzLjI1NCwwLTI0LDEwLjc0Ni0yNCwyNHMxMC43NDYsMjQsMjQsMjRzMjQtMTAuNzQ2LDI0LTI0UzYxNy4yNTQsNjAwLDYwNCw2MDB6IE02MDAuMjc5LDYzNS4wNzMgIGwtMTEuMDM5LTExLjA0M2w0LjI0Mi00LjI0Mmw2Ljc5Nyw2LjgwMWwxNC40MjYtMTQuNDI2bDQuMjQyLDQuMjQyTDYwMC4yNzksNjM1LjA3M3oiLz4NCjxwYXRoIGZpbGw9IiMzRTJDMkMiIGQ9Ik02NjQsNjAwYy0xMy4yNTQsMC0yNCwxMC43NDYtMjQsMjRzMTAuNzQ2LDI0LDI0LDI0czI0LTEwLjc0NiwyNC0yNFM2NzcuMjU0LDYwMCw2NjQsNjAweiBNNjYwLjI3OSw2MzUuMDczICBsLTExLjAzOS0xMS4wNDNsNC4yNDItNC4yNDJsNi43OTcsNi44MDFsMTQuNDI2LTE0LjQyNmw0LjI0Miw0LjI0Mkw2NjAuMjc5LDYzNS4wNzN6Ii8+DQo8cGF0aCBmaWxsPSIjRkEwMDAwIiBkPSJNNzI0LDYwMGMtMTMuMjU0LDAtMjQsMTAuNzQ2LTI0LDI0czEwLjc0NiwyNCwyNCwyNHMyNC0xMC43NDYsMjQtMjRTNzM3LjI1NCw2MDAsNzI0LDYwMHogTTcyMC4yNzksNjM1LjA3MyAgbC0xMS4wMzktMTEuMDQzbDQuMjQyLTQuMjQybDYuNzk3LDYuODAxbDE0LjQyNi0xNC40MjZsNC4yNDIsNC4yNDJMNzIwLjI3OSw2MzUuMDczeiIvPg0KPHBhdGggZmlsbD0iI0ZGOUQwMCIgZD0iTTc4NCw2MDBjLTEzLjI1NCwwLTI0LDEwLjc0Ni0yNCwyNHMxMC43NDYsMjQsMjQsMjRzMjQtMTAuNzQ2LDI0LTI0Uzc5Ny4yNTQsNjAwLDc4NCw2MDB6IE03ODAuMjc5LDYzNS4wNzMgIGwtMTEuMDM5LTExLjA0M2w0LjI0Mi00LjI0Mmw2Ljc5Nyw2LjgwMWwxNC40MjYtMTQuNDI2bDQuMjQyLDQuMjQyTDc4MC4yNzksNjM1LjA3M3oiLz4NCjxwYXRoIGZpbGw9IiNGRkY2MDAiIGQ9Ik04NDQsNjAwYy0xMy4yNTQsMC0yNCwxMC43NDYtMjQsMjRzMTAuNzQ2LDI0LDI0LDI0czI0LTEwLjc0NiwyNC0yNFM4NTcuMjU0LDYwMCw4NDQsNjAweiBNODQwLjI3OSw2MzUuMDczICBsLTExLjAzOS0xMS4wNDNsNC4yNDItNC4yNDJsNi43OTcsNi44MDFsMTQuNDI2LTE0LjQyNmw0LjI0Miw0LjI0Mkw4NDAuMjc5LDYzNS4wNzN6Ii8+DQo8cGF0aCBmaWxsPSIjNzJDQTM0IiBkPSJNOTA0LDYwMGMtMTMuMjU0LDAtMjQsMTAuNzQ2LTI0LDI0czEwLjc0NiwyNCwyNCwyNHMyNC0xMC43NDYsMjQtMjRTOTE3LjI1NCw2MDAsOTA0LDYwMHogTTkwMC4yNzksNjM1LjA3MyAgbC0xMS4wMzktMTEuMDQzbDQuMjQyLTQuMjQybDYuNzk3LDYuODAxbDE0LjQyNi0xNC40MjZsNC4yNDIsNC4yNDJMOTAwLjI3OSw2MzUuMDczeiIvPg0KPHBhdGggZmlsbD0iIzAwQUFGMiIgZD0iTTk2NCw2MDBjLTEzLjI1NCwwLTI0LDEwLjc0Ni0yNCwyNHMxMC43NDYsMjQsMjQsMjRzMjQtMTAuNzQ2LDI0LTI0Uzk3Ny4yNTQsNjAwLDk2NCw2MDB6IE05NjAuMjc5LDYzNS4wNzMgIGwtMTEuMDM5LTExLjA0M2w0LjI0Mi00LjI0Mmw2Ljc5Nyw2LjgwMWwxNC40MjYtMTQuNDI2bDQuMjQyLDQuMjQyTDk2MC4yNzksNjM1LjA3M3oiLz4NCjxwYXRoIGZpbGw9IiMyMzQ4QTYiIGQ9Ik0xMDI0LDYwMGMtMTMuMjU0LDAtMjQsMTAuNzQ2LTI0LDI0czEwLjc0NiwyNCwyNCwyNHMyNC0xMC43NDYsMjQtMjRTMTAzNy4yNTQsNjAwLDEwMjQsNjAweiAgIE0xMDIwLjI3OSw2MzUuMDczbC0xMS4wMzktMTEuMDQzbDQuMjQyLTQuMjQybDYuNzk3LDYuODAxbDE0LjQyNi0xNC40MjZsNC4yNDIsNC4yNDJMMTAyMC4yNzksNjM1LjA3M3oiLz4NCjxwYXRoIGZpbGw9IiNGQjAwODUiIGQ9Ik0xMDg0LDYwMGMtMTMuMjU0LDAtMjQsMTAuNzQ2LTI0LDI0czEwLjc0NiwyNCwyNCwyNHMyNC0xMC43NDYsMjQtMjRTMTA5Ny4yNTQsNjAwLDEwODQsNjAweiAgIE0xMDgwLjI3OSw2MzUuMDczbC0xMS4wMzktMTEuMDQzbDQuMjQyLTQuMjQybDYuNzk3LDYuODAxbDE0LjQyNi0xNC40MjZsNC4yNDIsNC4yNDJMMTA4MC4yNzksNjM1LjA3M3oiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0zMjMuNSw5MzdjMzAuNjA0LDAsNTUuNSwyNC44OTYsNTUuNSw1NS41cy0yNC44OTYsNTUuNS01NS41LDU1LjVjLTIuODkxLDAtNi4wODktMC4zNTMtMTAuMDY0LTEuMDg0ICBsLTE5LjEzMi0zLjU0MWwtMTMuNzY3LDEzLjc2NmwtMS42OTgsMS42OTdMMjY4LDEwNjkuNjhWMTA4NWgtMzd2MzdoLTM3djM3aC0zN3YtMjEuNjhsMTAxLjg1OS0xMDEuODU4bDEzLjc2Ni0xMy43NjcgIGwtMy41NDEtMTkuMTQxYy0wLjc0LTMuOTc1LTEuMDg0LTcuMTY0LTEuMDg0LTEwLjA1NEMyNjgsOTYxLjg5NiwyOTIuODk2LDkzNywzMjMuNSw5MzcgTTMyMy41LDkwMCAgYy01MS4wOTIsMC05Mi41LDQxLjQwOS05Mi41LDkyLjVjMCw1Ljc4MSwwLjY4NywxMS4zNDYsMS42OTgsMTYuODAyTDEyMCwxMTIydjc0aDExMXYtMzdoMzd2LTM3aDM3di0zN2wxLjY5OC0xLjY5OCAgYzUuNDU2LDEuMDEyLDExLjAyOSwxLjY5OCwxNi44MDIsMS42OThjNTEuMDkxLDAsOTIuNS00MS40MDgsOTIuNS05Mi41QzQxNiw5NDEuNDA5LDM3NC41OTIsOTAwLDMyMy41LDkwMEwzMjMuNSw5MDB6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNMzQyLjA3Miw5OTIuNWMwLDEwLjIyNi04LjI3NCwxOC41LTE4LjUsMTguNXMtMTguNS04LjI3NS0xOC41LTE4LjVzOC4yNzUtMTguNSwxOC41LTE4LjUgIFMzNDIuMDcyLDk4Mi4yNzQsMzQyLjA3Miw5OTIuNXoiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik03NjUsOTc0YzQwLjgzLDAsNzQsMzMuMTcsNzQsNzRzLTMzLjE3LDc0LTc0LDc0aC03NGMtMjQuMTM3LDAtNDUuNjM2LDExLjYzNS01OS4xNDksMjkuNjI5ICBDNjIyLjg1NCwxMTQ0LjgzNiw2MTcsMTEzNC4wNjgsNjE3LDExMjJ2LTkyLjVjMC0zMC41OTYsMjQuOTMyLTU1LjUsNTUuNS01NS41SDc2NSBNNzY1LDkzN2gtOTIuNWMtNTEuMDkyLDAtOTIuNSw0MS40MDktOTIuNSw5Mi41ICB2OTIuNWMwLDQwLjg1NywzMy4xNyw3NCw3NCw3NGMwLTIwLjQ1MSwxNi41ODUtMzcsMzctMzdoNzRjNjEuMzE3LDAsMTExLTQ5LjcxOSwxMTEtMTExUzgyNi4zMTcsOTM3LDc2NSw5MzdMNzY1LDkzN3oiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik00OTcsMTM0OGMxNi41NTMsMCwzMCwxMy40NDcsMzAsMzBzLTEzLjQ0NywzMC0zMCwzMGgtMzBjLTkuNzg1LDAtMTguNTAxLDQuNzE3LTIzLjk3OSwxMi4wMTIgIGMtMy42NDctMi43NTQtNi4wMjEtNy4xMTktNi4wMjEtMTIuMDEydi0zNy41YzAtMTIuNDAzLDEwLjEwNy0yMi41LDIyLjUtMjIuNUg0OTcgTTQ5NywxMzMzaC0zNy41Yy0yMC43MTMsMC0zNy41LDE2Ljc4Ny0zNy41LDM3LjUgIHYzNy41YzAsMTYuNTYzLDEzLjQ0NywzMCwzMCwzMGMwLTguMjkxLDYuNzI0LTE1LDE1LTE1aDMwYzI0Ljg1OCwwLDQ1LTIwLjE1Niw0NS00NVM1MjEuODU4LDEzMzMsNDk3LDEzMzNMNDk3LDEzMzN6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNNDIyLDE1ODYuOTk2YzAsMTYuNTY0LDEzLjQ0NywzMCwyOS45OTksMzBjMC04LjI5MSw2LjcyNC0xNSwxNS0xNWgyOS45OTkgICBjMjQuODU4LDAsNDUuMDAyLTIwLjE1Niw0NS4wMDItNDQuOTk4YzAtMjQuODQ0LTIwLjE0NS00NC45OTgtNDUuMDAyLTQ0Ljk5OGgtMzcuNDk5Yy0yMC43MTIsMC0zNy40OTksMTYuNzg1LTM3LjQ5OSwzNy40OTggICBWMTU4Ni45OTZ6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNNzIwLjUsMTM0MWMyMC42ODQsMCwzNy41LDE2LjgxNiwzNy41LDM3LjVzLTE2LjgxNiwzNy41LTM3LjUsMzcuNWMtMi42NTUsMC01LjUyNi0wLjM5Mi04Ljc2LTEuMTkgIGwtNi4zODctMS41ODJsLTUuNDk3LDMuNjMzbC0xLjcxLDEuMTMybDAuMDExLTIuNTZsMC4wNDgtNi4ybC00LjM2NS00LjQwNWMtNi45OTEtNy4wOS0xMC44NC0xNi40NDMtMTAuODQtMjYuMzI3ICBDNjgzLDEzNTcuODE2LDY5OS44MTYsMTM0MSw3MjAuNSwxMzQxIE03MjAuNSwxMzI2Yy0yOC45NzUsMC01Mi41LDIzLjUxNS01Mi41LDUyLjVjMCwxNC4zNzQsNS44MDEsMjcuMzYzLDE1LjE1NywzNi44NTVMNjgzLDE0NDYgIGwyNS4xMzctMTYuNjIyYzMuOTg0LDAuOTc4LDguMDg2LDEuNjIyLDEyLjM2MywxLjYyMmMyOC45ODUsMCw1Mi41LTIzLjUxNSw1Mi41LTUyLjVTNzQ5LjQ4NSwxMzI2LDcyMC41LDEzMjZMNzIwLjUsMTMyNnoiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik03MjAuNSwxNTA0Yy0yOC45NzUsMC01Mi41LDIzLjUxMS01Mi41LDUyLjVjMCwxNC4zNyw1LjgwMSwyNy4zNywxNS4xNTcsMzYuODU1TDY4MywxNjI0bDI1LjEzNy0xNi42MjYgICBjMy45ODQsMC45NzQsOC4wODYsMS42MjYsMTIuMzYzLDEuNjI2YzI4Ljk4NSwwLDUyLjUtMjMuNTExLDUyLjUtNTIuNVM3NDkuNDg1LDE1MDQsNzIwLjUsMTUwNHoiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik05NjcsMTM1MWM0MS41MjgsMCw0NSwxNS40ODMsNDUsMzAuMDAxYzAsNS4wMzktMS4zNDgsMTAuNTE4LTIuODEyLDE1SDk1OS41ICBjLTE3LjYzOCwwLTI1LjI1NSwwLjczMi0zMy43NTEsNi41OTJjLTMuNTE2LTkuNjQ2LTUuNzU3LTIyLjY3Ni0xLjQwNi0zMy4xNUM5MjkuNDExLDEzNTcuMjA4LDk0My43NjcsMTM1MSw5NjcsMTM1MSBNOTY3LDEzMzYgIGMtODMuODc5LDAtNTkuOTU3LDc1LjAwMS00NC45NzIsOTAuMDAxYzE1LTE1LDE1LTE1LDM3LjQ3Mi0xNWg1OS43NjZjMCwwLDcuNzM0LTE1LDcuNzM0LTMwQzEwMjcsMTM0My41LDk5NywxMzM2LDk2NywxMzM2ICBMOTY3LDEzMzZ6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNMTAxOS4yNjYsMTU5MGMwLDAsNy43MzQtMTUsNy43MzQtMzBjMC0zNy41LTI5Ljk3OS00NS01OS45NzktNDVjLTgzLjkxNCwwLTU5Ljk3OSw3NS00NC45NzksOTAgICBjMTQuOTkzLTE1LDE0Ljk5My0xNSwzNy40NzktMTVIMTAxOS4yNjZ6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNMjgyLjc3MywxNzMwSDE1MHYxMzIuNzczTDMzNy4xODgsMjA1MHYtMTMyLjc3M0g0NzBMMjgyLjc3MywxNzMweiBNMjIzLjEyNSwxODQxLjIxMSAgYy0yMS4wMTYsMC0zOC4wNDctMTcuMDMxLTM4LjA0Ny0zOC4wNDdzMTcuMDMxLTM4LjA0NywzOC4wNDctMzguMDQ3czM4LjA0NywxNy4wMzEsMzguMDQ3LDM4LjA0NyAgUzI0NC4xNDEsMTg0MS4yMTEsMjIzLjEyNSwxODQxLjIxMXoiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik00MDguNjM5LDE3MzBINDAydjYuNjM5bDkuMzU5LDkuMzYxdi02LjYzOUg0MThMNDA4LjYzOSwxNzMweiBNNDA1LjY1NiwxNzM1LjU2MSAgYy0xLjA1MSwwLTEuOTAyLTAuODUyLTEuOTAyLTEuOTAyczAuODUyLTEuOTAyLDEuOTAyLTEuOTAyczEuOTAyLDAuODUyLDEuOTAyLDEuOTAyUzQwNi43MDcsMTczNS41NjEsNDA1LjY1NiwxNzM1LjU2MXoiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0xMjk4LjI4MSwxNzQxLjcwNGMtMTUuNjI1LTE1LjYwNS00MC45MzgtMTUuNjA1LTU2LjU2MiwwbC0xNTEuMjUsMTUxLjMyOCAgYzEzLjUwNiwzLjQ5NiwyNi4wMDYsMTAuMjkzLDM2LjE2MiwyMC40NDljMTAuMzEyLDEwLjMxMiwxNi44NzUsMjIuODkxLDIwLjQsMzYuMDc0bDE1MS4yNS0xNTEuMjcgIEMxMzEzLjkwNiwxNzgyLjY2MSwxMzEzLjkwNiwxNzU3LjMyOSwxMjk4LjI4MSwxNzQxLjcwNHoiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik0xMDk4LjM1LDE5OTguMzA2YzE1LjYyNS0xNS42MjUsMTUuNjI1LTQwLjkzOCwwLTU2LjU0M2MtMTUuNjI1LTE1LjYyNS00MC45MzgtMTUuNjI1LTU2LjU2MiwwICBMOTkwLDIwNDkuOTg1TDEwOTguMzUsMTk5OC4zMDZ6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNMTI1Ni45NSwyMDE1LjgyNmMtMC43ODEtMC43OC0yLjA0Ny0wLjc4LTIuODI4LDBsLTcuNTYyLDcuNTY2YzAuNjc1LDAuMTc0LDEuMywwLjUxNCwxLjgwOCwxLjAyMSAgYzAuNTE2LDAuNTE2LDAuODQ0LDEuMTQ1LDEuMDIxLDEuODA1bDcuNTYyLTcuNTYzQzEyNTcuNzMxLDIwMTcuODc0LDEyNTcuNzMxLDIwMTYuNjA3LDEyNTYuOTUsMjAxNS44MjZ6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNMTI0Ni45NTMsMjAyOC42NTZjMC43ODEtMC43ODEsMC43ODEtMi4wNDcsMC0yLjgyOHMtMi4wNDctMC43ODEtMi44MjgsMGwtMi41ODksNS40MTJMMTI0Ni45NTMsMjAyOC42NTZ6Ii8+DQo8cGF0aCBmaWxsPSIjM0QzMDJGIiBkPSJNNzg2LjA5NCwxNzMwSDU3MHYzMjBsNzkuNzc1LTY2LjQwNkw3MjkuOTMyLDIwNTBMODEwLDE5ODMuNzAxTDg5MCwyMDUwdi0yMTYuOTkyTDc4Ni4wOTQsMTczMHogTTc1MCwxODcwICB2LTEwMGwxMDAsMTAwSDc1MHoiLz4NCjxwYXRoIGZpbGw9IiMzRDMwMkYiIGQ9Ik04ODQuODA1LDE3MzBIODc0djE2bDMuOTg5LTMuMzJsNC4wMDgsMy4zMmw0LjAwMy0zLjMxNGw0LDMuMzE0di0xMC44NUw4ODQuODA1LDE3MzB6IE04ODMsMTczN3YtNWw1LDVIODgzICB6Ii8+DQo8cmVjdCB4PSIxMjAiIHk9IjkwMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHdpZHRoPSIyOTYiIGhlaWdodD0iMjk2Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjE1NyIgeTE9IjkwMCIgeDI9IjE1NyIgeTI9IjExOTYiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iMTk0IiB5MT0iOTAwIiB4Mj0iMTk0IiB5Mj0iMTE5NiIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSIyMzEiIHkxPSI5MDAiIHgyPSIyMzEiIHkyPSIxMTk2Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjI2OCIgeTE9IjkwMCIgeDI9IjI2OCIgeTI9IjExOTYiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iMzA1IiB5MT0iOTAwIiB4Mj0iMzA1IiB5Mj0iMTE5NiIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSIzNDIiIHkxPSI5MDAiIHgyPSIzNDIiIHkyPSIxMTk2Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjM3OSIgeTE9IjkwMCIgeDI9IjM3OSIgeTI9IjExOTYiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iNDE2IiB5MT0iOTM3IiB4Mj0iMTIwIiB5Mj0iOTM3Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjQxNiIgeTE9Ijk3NCIgeDI9IjEyMCIgeTI9Ijk3NCIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSI0MTYiIHkxPSIxMDExIiB4Mj0iMTIwIiB5Mj0iMTAxMSIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSI0MTYiIHkxPSIxMDQ4IiB4Mj0iMTIwIiB5Mj0iMTA0OCIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSI0MTYiIHkxPSIxMDg1IiB4Mj0iMTIwIiB5Mj0iMTA4NSIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSI0MTYiIHkxPSIxMTIyIiB4Mj0iMTIwIiB5Mj0iMTEyMiIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSI0MTYiIHkxPSIxMTU5IiB4Mj0iMTIwIiB5Mj0iMTE1OSIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSIxMjAiIHkxPSI5MDAiIHgyPSI0MTYiIHkyPSIxMTk2Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjQxNiIgeTE9IjkwMCIgeDI9IjEyMCIgeTI9IjExOTYiLz4NCjxyZWN0IHg9IjU4MCIgeT0iOTAwIiBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgd2lkdGg9IjI5NiIgaGVpZ2h0PSIyOTYiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iNjE3IiB5MT0iOTAwIiB4Mj0iNjE3IiB5Mj0iMTE5NiIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSI2NTQiIHkxPSI5MDAiIHgyPSI2NTQiIHkyPSIxMTk2Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjY5MSIgeTE9IjkwMCIgeDI9IjY5MSIgeTI9IjExOTYiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iNzI4IiB5MT0iOTAwIiB4Mj0iNzI4IiB5Mj0iMTE5NiIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSI3NjUiIHkxPSI5MDAiIHgyPSI3NjUiIHkyPSIxMTk2Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjgwMiIgeTE9IjkwMCIgeDI9IjgwMiIgeTI9IjExOTYiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iODM5IiB5MT0iOTAwIiB4Mj0iODM5IiB5Mj0iMTE5NiIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSI4NzYiIHkxPSI5MzciIHgyPSI1ODAiIHkyPSI5MzciLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iODc2IiB5MT0iOTc0IiB4Mj0iNTgwIiB5Mj0iOTc0Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9Ijg3NiIgeTE9IjEwMTEiIHgyPSI1ODAiIHkyPSIxMDExIi8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9Ijg3NiIgeTE9IjEwNDgiIHgyPSI1ODAiIHkyPSIxMDQ4Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9Ijg3NiIgeTE9IjEwODUiIHgyPSI1ODAiIHkyPSIxMDg1Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9Ijg3NiIgeTE9IjExMjIiIHgyPSI1ODAiIHkyPSIxMTIyIi8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9Ijg3NiIgeTE9IjExNTkiIHgyPSI1ODAiIHkyPSIxMTU5Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjU4MCIgeTE9IjkwMCIgeDI9Ijg3NiIgeTI9IjExOTYiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iODc2IiB5MT0iOTAwIiB4Mj0iNTgwIiB5Mj0iMTE5NiIvPg0KPHBvbHlnb24gZmlsbD0iIzNEMzAyRiIgcG9pbnRzPSIxMjUxLjI0MSw5MzcgMTI1MS4yNDEsOTAwIDEyMTQuMjQxLDkwMCAxMjE0LjI0MSw5MzcgMTE0MC4yNDEsOTM3IDExNDAuMjQxLDkwMCAxMTAzLjI0MSw5MDAgICAxMTAzLjI0MSw5MzcgMTAzMCw5MzcgMTAzMCw5NzQgMTEwMy4yNDEsOTc0IDExNDAuMjQxLDk3NCAxMjE0LjI0MSw5NzQgMTI1MS4yNDEsOTc0IDEzMjYsOTc0IDEzMjYsOTM3ICIvPg0KPHJlY3QgeD0iMTA2NyIgeT0iMTA4NSIgZmlsbD0iIzNEMzAyRiIgd2lkdGg9IjIyMiIgaGVpZ2h0PSIzNyIvPg0KPHJlY3QgeD0iMTA2NyIgeT0iMTAxMSIgZmlsbD0iIzNEMzAyRiIgd2lkdGg9IjIyMiIgaGVpZ2h0PSIzNyIvPg0KPHBvbHlnb24gZmlsbD0iIzNEMzAyRiIgcG9pbnRzPSIxMjUyLDExOTYgMTA2NywxMTk2IDEwNjcsMTE1OSAxMjg5LDExNTkgIi8+DQo8cmVjdCB4PSIxMDMwIiB5PSI5MDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB3aWR0aD0iMjk2IiBoZWlnaHQ9IjI5NiIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSIxMDY3IiB5MT0iOTAwIiB4Mj0iMTA2NyIgeTI9IjExOTYiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iMTEwNCIgeTE9IjkwMCIgeDI9IjExMDQiIHkyPSIxMTk2Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjExNDEiIHkxPSI5MDAiIHgyPSIxMTQxIiB5Mj0iMTE5NiIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSIxMTc4IiB5MT0iOTAwIiB4Mj0iMTE3OCIgeTI9IjExOTYiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iMTIxNSIgeTE9IjkwMCIgeDI9IjEyMTUiIHkyPSIxMTk2Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjEyNTIiIHkxPSI5MDAiIHgyPSIxMjUyIiB5Mj0iMTE5NiIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSIxMjg5IiB5MT0iOTAwIiB4Mj0iMTI4OSIgeTI9IjExOTYiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iMTMyNiIgeTE9IjkzNyIgeDI9IjEwMzAiIHkyPSI5MzciLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iMTMyNiIgeTE9Ijk3NCIgeDI9IjEwMzAiIHkyPSI5NzQiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iMTMyNiIgeTE9IjEwMTEiIHgyPSIxMDMwIiB5Mj0iMTAxMSIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSIxMzI2IiB5MT0iMTA0OCIgeDI9IjEwMzAiIHkyPSIxMDQ4Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjEzMjYiIHkxPSIxMDg1IiB4Mj0iMTAzMCIgeTI9IjEwODUiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0UxRDBEMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iMTMyNiIgeTE9IjExMjIiIHgyPSIxMDMwIiB5Mj0iMTEyMiIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSIxMzI2IiB5MT0iMTE1OSIgeDI9IjEwMzAiIHkyPSIxMTU5Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNFMUQwRDAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjEwMzAiIHkxPSI5MDAiIHgyPSIxMzI2IiB5Mj0iMTE5NiIvPg0KPGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRTFEMEQwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSIxMzI2IiB5MT0iOTAwIiB4Mj0iMTAzMCIgeTI9IjExOTYiLz4NCjwvc3ZnPg==') !important}</style>


<!-- CUSTOM CODE ENDS HERE -->


				</section>
			</div>
		</article>
		<?php endwhile; endif; ?>
	</main>
</div>
<?php get_footer(); ?>