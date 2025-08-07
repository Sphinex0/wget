<!DOCTYPE html>
<html lang="en">
<head><script type="text/javascript" src="https://web-static.archive.org/_static/js/bundle-playback.js?v=1B2M2Y8A" charset="utf-8"></script>
<script type="text/javascript" src="https://web-static.archive.org/_static/js/wombat.js?v=1B2M2Y8A" charset="utf-8"></script>
<script>window.RufflePlayer=window.RufflePlayer||{};window.RufflePlayer.config={"autoplay":"on","unmuteOverlay":"hidden","showSwfDownload":true};</script>
<script type="text/javascript" src="https://web-static.archive.org/_static/js/ruffle/ruffle.js"></script>
<script type="text/javascript">
    __wm.init("https://web.archive.org/web");
  __wm.wombat("http://git.musl-libc.org/cgit/musl/tree/src/string/memmem.c","20201001184748","https://web.archive.org/","web","https://web-static.archive.org/_static/",
	      "1601578068");
</script>
<link rel="stylesheet" type="text/css" href="https://web-static.archive.org/_static/css/banner-styles.css?v=1B2M2Y8A" />
<link rel="stylesheet" type="text/css" href="https://web-static.archive.org/_static/css/iconochive.css?v=1B2M2Y8A" />
<!-- End Wayback Rewrite JS Include -->

<title>memmem.c\string\src - musl - musl - an implementation of the standard library for Linux-based systems</title>
<meta name="generator" content="cgit v1.2.1"/>
<meta name="robots" content="index, nofollow"/>
<link rel="stylesheet" type="text/css" href="/web/20201001184748cs_/http://git.musl-libc.org/cgit.css"/>
<link rel="shortcut icon" href="/web/20201001184748im_/http://git.musl-libc.org/favicon.ico"/>
<link rel="alternate" title="Atom feed" href="https://web.archive.org/web/20201001184748/http://git.musl-libc.org/cgit/musl/atom/src/string/memmem.c?h=master" type="application/atom+xml"/>
<link rel="vcs-git" href="git://git.musl-libc.org/musl" title="musl Git repository"/>
</head>
<body>
<div id="cgit"><table id="header">
<tr>
<td class="logo" rowspan="2"><a href="/web/20201001184748/http://git.musl-libc.org/cgit/"><img src="/web/20201001184748im_/http://git.musl-libc.org/cgit.png" alt="cgit logo"/></a></td>
<td class="main"><a href="/web/20201001184748/http://git.musl-libc.org/cgit/">index</a> : <a title="musl" href="/web/20201001184748/http://git.musl-libc.org/cgit/musl/">musl</a></td><td class="form"><form method="get">
<select name="h" onchange="this.form.submit();">
<option value="master" selected="selected">master</option>
<option value="rs-1.0">rs-1.0</option>
</select> <input type="submit" value="switch"/></form></td></tr>
<tr><td class="sub">musl - an implementation of the standard library for Linux-based systems</td><td class="sub right"></td></tr></table>
<table class="tabs"><tr><td>
<a href="/web/20201001184748/http://git.musl-libc.org/cgit/musl/">summary</a><a href="/web/20201001184748/http://git.musl-libc.org/cgit/musl/refs/">refs</a><a href="/web/20201001184748/http://git.musl-libc.org/cgit/musl/log/src/string/memmem.c">log</a><a class="active" href="/web/20201001184748/http://git.musl-libc.org/cgit/musl/tree/src/string/memmem.c">tree</a><a href="/web/20201001184748/http://git.musl-libc.org/cgit/musl/commit/src/string/memmem.c">commit</a><a href="/web/20201001184748/http://git.musl-libc.org/cgit/musl/diff/src/string/memmem.c">diff</a></td><td class="form"><form class="right" method="get" action="/web/20201001184748/http://git.musl-libc.org/cgit/musl/log/src/string/memmem.c">
<select name="qt">
<option value="grep">log msg</option>
<option value="author">author</option>
<option value="committer">committer</option>
<option value="range">range</option>
</select>
<input class="txt" type="search" size="10" name="q" value=""/>
<input type="submit" value="search"/>
</form>
</td></tr></table>
<div class="path">path: <a href="/web/20201001184748/http://git.musl-libc.org/cgit/musl/tree/">root</a>/<a href="/web/20201001184748/http://git.musl-libc.org/cgit/musl/tree/src">src</a>/<a href="/web/20201001184748/http://git.musl-libc.org/cgit/musl/tree/src/string">string</a>/<a href="/web/20201001184748/http://git.musl-libc.org/cgit/musl/tree/src/string/memmem.c">memmem.c</a></div><div class="content">blob: 11eff86e443e73d5490124f641ce1653f34f53e4 (<a href="/web/20201001184748/http://git.musl-libc.org/cgit/musl/plain/src/string/memmem.c">plain</a>)
<table summary="blob content" class="blob">
<tr><td class="linenumbers"><pre><a id="n1" href="#n1">1</a>
<a id="n2" href="#n2">2</a>
<a id="n3" href="#n3">3</a>
<a id="n4" href="#n4">4</a>
<a id="n5" href="#n5">5</a>
<a id="n6" href="#n6">6</a>
<a id="n7" href="#n7">7</a>
<a id="n8" href="#n8">8</a>
<a id="n9" href="#n9">9</a>
<a id="n10" href="#n10">10</a>
<a id="n11" href="#n11">11</a>
<a id="n12" href="#n12">12</a>
<a id="n13" href="#n13">13</a>
<a id="n14" href="#n14">14</a>
<a id="n15" href="#n15">15</a>
<a id="n16" href="#n16">16</a>
<a id="n17" href="#n17">17</a>
<a id="n18" href="#n18">18</a>
<a id="n19" href="#n19">19</a>
<a id="n20" href="#n20">20</a>
<a id="n21" href="#n21">21</a>
<a id="n22" href="#n22">22</a>
<a id="n23" href="#n23">23</a>
<a id="n24" href="#n24">24</a>
<a id="n25" href="#n25">25</a>
<a id="n26" href="#n26">26</a>
<a id="n27" href="#n27">27</a>
<a id="n28" href="#n28">28</a>
<a id="n29" href="#n29">29</a>
<a id="n30" href="#n30">30</a>
<a id="n31" href="#n31">31</a>
<a id="n32" href="#n32">32</a>
<a id="n33" href="#n33">33</a>
<a id="n34" href="#n34">34</a>
<a id="n35" href="#n35">35</a>
<a id="n36" href="#n36">36</a>
<a id="n37" href="#n37">37</a>
<a id="n38" href="#n38">38</a>
<a id="n39" href="#n39">39</a>
<a id="n40" href="#n40">40</a>
<a id="n41" href="#n41">41</a>
<a id="n42" href="#n42">42</a>
<a id="n43" href="#n43">43</a>
<a id="n44" href="#n44">44</a>
<a id="n45" href="#n45">45</a>
<a id="n46" href="#n46">46</a>
<a id="n47" href="#n47">47</a>
<a id="n48" href="#n48">48</a>
<a id="n49" href="#n49">49</a>
<a id="n50" href="#n50">50</a>
<a id="n51" href="#n51">51</a>
<a id="n52" href="#n52">52</a>
<a id="n53" href="#n53">53</a>
<a id="n54" href="#n54">54</a>
<a id="n55" href="#n55">55</a>
<a id="n56" href="#n56">56</a>
<a id="n57" href="#n57">57</a>
<a id="n58" href="#n58">58</a>
<a id="n59" href="#n59">59</a>
<a id="n60" href="#n60">60</a>
<a id="n61" href="#n61">61</a>
<a id="n62" href="#n62">62</a>
<a id="n63" href="#n63">63</a>
<a id="n64" href="#n64">64</a>
<a id="n65" href="#n65">65</a>
<a id="n66" href="#n66">66</a>
<a id="n67" href="#n67">67</a>
<a id="n68" href="#n68">68</a>
<a id="n69" href="#n69">69</a>
<a id="n70" href="#n70">70</a>
<a id="n71" href="#n71">71</a>
<a id="n72" href="#n72">72</a>
<a id="n73" href="#n73">73</a>
<a id="n74" href="#n74">74</a>
<a id="n75" href="#n75">75</a>
<a id="n76" href="#n76">76</a>
<a id="n77" href="#n77">77</a>
<a id="n78" href="#n78">78</a>
<a id="n79" href="#n79">79</a>
<a id="n80" href="#n80">80</a>
<a id="n81" href="#n81">81</a>
<a id="n82" href="#n82">82</a>
<a id="n83" href="#n83">83</a>
<a id="n84" href="#n84">84</a>
<a id="n85" href="#n85">85</a>
<a id="n86" href="#n86">86</a>
<a id="n87" href="#n87">87</a>
<a id="n88" href="#n88">88</a>
<a id="n89" href="#n89">89</a>
<a id="n90" href="#n90">90</a>
<a id="n91" href="#n91">91</a>
<a id="n92" href="#n92">92</a>
<a id="n93" href="#n93">93</a>
<a id="n94" href="#n94">94</a>
<a id="n95" href="#n95">95</a>
<a id="n96" href="#n96">96</a>
<a id="n97" href="#n97">97</a>
<a id="n98" href="#n98">98</a>
<a id="n99" href="#n99">99</a>
<a id="n100" href="#n100">100</a>
<a id="n101" href="#n101">101</a>
<a id="n102" href="#n102">102</a>
<a id="n103" href="#n103">103</a>
<a id="n104" href="#n104">104</a>
<a id="n105" href="#n105">105</a>
<a id="n106" href="#n106">106</a>
<a id="n107" href="#n107">107</a>
<a id="n108" href="#n108">108</a>
<a id="n109" href="#n109">109</a>
<a id="n110" href="#n110">110</a>
<a id="n111" href="#n111">111</a>
<a id="n112" href="#n112">112</a>
<a id="n113" href="#n113">113</a>
<a id="n114" href="#n114">114</a>
<a id="n115" href="#n115">115</a>
<a id="n116" href="#n116">116</a>
<a id="n117" href="#n117">117</a>
<a id="n118" href="#n118">118</a>
<a id="n119" href="#n119">119</a>
<a id="n120" href="#n120">120</a>
<a id="n121" href="#n121">121</a>
<a id="n122" href="#n122">122</a>
<a id="n123" href="#n123">123</a>
<a id="n124" href="#n124">124</a>
<a id="n125" href="#n125">125</a>
<a id="n126" href="#n126">126</a>
<a id="n127" href="#n127">127</a>
<a id="n128" href="#n128">128</a>
<a id="n129" href="#n129">129</a>
<a id="n130" href="#n130">130</a>
<a id="n131" href="#n131">131</a>
<a id="n132" href="#n132">132</a>
<a id="n133" href="#n133">133</a>
<a id="n134" href="#n134">134</a>
<a id="n135" href="#n135">135</a>
<a id="n136" href="#n136">136</a>
<a id="n137" href="#n137">137</a>
<a id="n138" href="#n138">138</a>
<a id="n139" href="#n139">139</a>
<a id="n140" href="#n140">140</a>
<a id="n141" href="#n141">141</a>
<a id="n142" href="#n142">142</a>
<a id="n143" href="#n143">143</a>
<a id="n144" href="#n144">144</a>
<a id="n145" href="#n145">145</a>
<a id="n146" href="#n146">146</a>
<a id="n147" href="#n147">147</a>
<a id="n148" href="#n148">148</a>
<a id="n149" href="#n149">149</a>
</pre></td>
<td class="lines"><pre><code>#define _GNU_SOURCE
#include &lt;string.h&gt;
#include &lt;stdint.h&gt;

static char *twobyte_memmem(const unsigned char *h, size_t k, const unsigned char *n)
{
	uint16_t nw = n[0]&lt;&lt;8 | n[1], hw = h[0]&lt;&lt;8 | h[1];
	for (h+=2, k-=2; k; k--, hw = hw&lt;&lt;8 | *h++)
		if (hw == nw) return (char *)h-2;
	return hw == nw ? (char *)h-2 : 0;
}

static char *threebyte_memmem(const unsigned char *h, size_t k, const unsigned char *n)
{
	uint32_t nw = (uint32_t)n[0]&lt;&lt;24 | n[1]&lt;&lt;16 | n[2]&lt;&lt;8;
	uint32_t hw = (uint32_t)h[0]&lt;&lt;24 | h[1]&lt;&lt;16 | h[2]&lt;&lt;8;
	for (h+=3, k-=3; k; k--, hw = (hw|*h++)&lt;&lt;8)
		if (hw == nw) return (char *)h-3;
	return hw == nw ? (char *)h-3 : 0;
}

static char *fourbyte_memmem(const unsigned char *h, size_t k, const unsigned char *n)
{
	uint32_t nw = (uint32_t)n[0]&lt;&lt;24 | n[1]&lt;&lt;16 | n[2]&lt;&lt;8 | n[3];
	uint32_t hw = (uint32_t)h[0]&lt;&lt;24 | h[1]&lt;&lt;16 | h[2]&lt;&lt;8 | h[3];
	for (h+=4, k-=4; k; k--, hw = hw&lt;&lt;8 | *h++)
		if (hw == nw) return (char *)h-4;
	return hw == nw ? (char *)h-4 : 0;
}

#define MAX(a,b) ((a)&gt;(b)?(a):(b))
#define MIN(a,b) ((a)&lt;(b)?(a):(b))

#define BITOP(a,b,op) \
 ((a)[(size_t)(b)/(8*sizeof *(a))] op (size_t)1&lt;&lt;((size_t)(b)%(8*sizeof *(a))))

static char *twoway_memmem(const unsigned char *h, const unsigned char *z, const unsigned char *n, size_t l)
{
	size_t i, ip, jp, k, p, ms, p0, mem, mem0;
	size_t byteset[32 / sizeof(size_t)] = { 0 };
	size_t shift[256];

	/* Computing length of needle and fill shift table */
	for (i=0; i&lt;l; i++)
		BITOP(byteset, n[i], |=), shift[n[i]] = i+1;

	/* Compute maximal suffix */
	ip = -1; jp = 0; k = p = 1;
	while (jp+k&lt;l) {
		if (n[ip+k] == n[jp+k]) {
			if (k == p) {
				jp += p;
				k = 1;
			} else k++;
		} else if (n[ip+k] &gt; n[jp+k]) {
			jp += k;
			k = 1;
			p = jp - ip;
		} else {
			ip = jp++;
			k = p = 1;
		}
	}
	ms = ip;
	p0 = p;

	/* And with the opposite comparison */
	ip = -1; jp = 0; k = p = 1;
	while (jp+k&lt;l) {
		if (n[ip+k] == n[jp+k]) {
			if (k == p) {
				jp += p;
				k = 1;
			} else k++;
		} else if (n[ip+k] &lt; n[jp+k]) {
			jp += k;
			k = 1;
			p = jp - ip;
		} else {
			ip = jp++;
			k = p = 1;
		}
	}
	if (ip+1 &gt; ms+1) ms = ip;
	else p = p0;

	/* Periodic needle? */
	if (memcmp(n, n+p, ms+1)) {
		mem0 = 0;
		p = MAX(ms, l-ms-1) + 1;
	} else mem0 = l-p;
	mem = 0;

	/* Search loop */
	for (;;) {
		/* If remainder of haystack is shorter than needle, done */
		if (z-h &lt; l) return 0;

		/* Check last byte first; advance by shift on mismatch */
		if (BITOP(byteset, h[l-1], &amp;)) {
			k = l-shift[h[l-1]];
			if (k) {
				if (k &lt; mem) k = mem;
				h += k;
				mem = 0;
				continue;
			}
		} else {
			h += l;
			mem = 0;
			continue;
		}

		/* Compare right half */
		for (k=MAX(ms+1,mem); k&lt;l &amp;&amp; n[k] == h[k]; k++);
		if (k &lt; l) {
			h += k-ms;
			mem = 0;
			continue;
		}
		/* Compare left half */
		for (k=ms+1; k&gt;mem &amp;&amp; n[k-1] == h[k-1]; k--);
		if (k &lt;= mem) return (char *)h;
		h += p;
		mem = mem0;
	}
}

void *memmem(const void *h0, size_t k, const void *n0, size_t l)
{
	const unsigned char *h = h0, *n = n0;

	/* Return immediately on empty needle */
	if (!l) return (void *)h;

	/* Return immediately when needle is longer than haystack */
	if (k&lt;l) return 0;

	/* Use faster algorithms for short needles */
	h = memchr(h0, *n, k);
	if (!h || l==1) return (void *)h;
	k -= h - (const unsigned char *)h0;
	if (k&lt;l) return 0;
	if (l==2) return twobyte_memmem(h, k, n);
	if (l==3) return threebyte_memmem(h, k, n);
	if (l==4) return fourbyte_memmem(h, k, n);

	return twoway_memmem(h, h+k, n, l);
}
</code></pre></td></tr></table>
</div> <!-- class=content -->
<div class="footer">generated by <a href="https://web.archive.org/web/20201001184748/https://git.zx2c4.com/cgit/about/">cgit v1.2.1</a> (<a href="https://web.archive.org/web/20201001184748/https://git-scm.com/">git 2.18.0</a>) at 2020-10-01 18:47:48 +0000</div>
</div> <!-- id=cgit -->
</body>
</html>
<!--
     FILE ARCHIVED ON 18:47:48 Oct 01, 2020 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 09:50:09 Aug 07, 2025.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 0.702
  exclusion.robots: 0.037
  exclusion.robots.policy: 0.023
  esindex: 0.013
  cdx.remote: 40.71
  LoadShardBlock: 1069.68 (3)
  PetaboxLoader3.resolve: 675.466 (4)
  PetaboxLoader3.datanode: 434.663 (4)
  load_resource: 166.555
-->