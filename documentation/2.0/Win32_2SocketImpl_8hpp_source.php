<?php
    $version = '2.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_a0fcb5a19f655e235834e6382998c7e0.php">sfml</a></li><li class="navelem"><a class="el" href="dir_29bf4fae8a8e962aff98775afacdab0f.php">sfml</a></li><li class="navelem"><a class="el" href="dir_e08987e907e430954db197f1220bd556.php">src</a></li><li class="navelem"><a class="el" href="dir_67163b7d99179e1ca51fe5e67c990233.php">SFML</a></li><li class="navelem"><a class="el" href="dir_fad19ee0178434be40b2db7be64e1b0c.php">Network</a></li><li class="navelem"><a class="el" href="dir_f0321036ae439cc4623cd799b487266d.php">Win32</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Win32/SocketImpl.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2013 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SOCKETIMPL_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_SOCKETIMPL_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Network/Socket.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;winsock2.h&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;{</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">namespace </span>priv</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;{</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="keyword">class </span>SocketImpl</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;{</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;    <span class="comment">// Types</span></div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;<span class="comment"></span>    <span class="keyword">typedef</span> <span class="keywordtype">int</span> AddrLength;</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;    <span class="keyword">static</span> sockaddr_in createAddress(Uint32 address, <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> port);</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    <span class="keyword">static</span> SocketHandle invalidSocket();</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">void</span> close(SocketHandle sock);</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">void</span> setBlocking(SocketHandle sock, <span class="keywordtype">bool</span> block);</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc" title="Status codes that may be returned by socket functions.">Socket::Status</a> getErrorStatus();</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;};</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;} <span class="comment">// namespace priv</span></div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;<span class="preprocessor">#endif // SFML_SOCKETIMPL_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>