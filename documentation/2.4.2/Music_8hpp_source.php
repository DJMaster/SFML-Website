<?php
    $version = '2.4.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Music.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.10 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
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
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li><li class="navelem"><a class="el" href="dir_985e7cc4f3a776db56f3b932018351f7.php">Audio</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Music.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2017 Laurent Gomila (laurent@sfml-dev.org)</span></div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_MUSIC_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_MUSIC_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Audio/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Audio/SoundStream.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Audio/InputSoundFile.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Mutex.hpp&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Time.hpp&gt;</span></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="preprocessor">#include &lt;vector&gt;</span></div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;{</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="keyword">class </span>InputStream;</div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;</div>
<div class="line"><a name="l00048"></a><span class="lineno"><a class="line" href="classsf_1_1Music.php">   48</a></span>&#160;<span class="keyword">class </span>SFML_AUDIO_API <a class="code" href="classsf_1_1Music.php">Music</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1SoundStream.php">SoundStream</a></div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;{</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;    <a class="code" href="classsf_1_1Music.php">Music</a>();</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;    ~<a class="code" href="classsf_1_1Music.php">Music</a>();</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;    <span class="keywordtype">bool</span> openFromFile(<span class="keyword">const</span> std::string&amp; filename);</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;    <span class="keywordtype">bool</span> openFromMemory(<span class="keyword">const</span> <span class="keywordtype">void</span>* data, std::size_t sizeInBytes);</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div>
<div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;    <span class="keywordtype">bool</span> openFromStream(<a class="code" href="classsf_1_1InputStream.php">InputStream</a>&amp; stream);</div>
<div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;</div>
<div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;    <a class="code" href="classsf_1_1Time.php">Time</a> getDuration() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;</div>
<div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;<span class="keyword">protected</span>:</div>
<div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;</div>
<div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">bool</span> onGetData(<a class="code" href="structsf_1_1SoundStream_1_1Chunk.php">Chunk</a>&amp; data);</div>
<div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;</div>
<div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> onSeek(<a class="code" href="classsf_1_1Time.php">Time</a> timeOffset);</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;</div>
<div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;</div>
<div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;    <span class="keywordtype">void</span> initialize();</div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;</div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1InputSoundFile.php">InputSoundFile</a>     m_file;     </div>
<div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;    <a class="code" href="classsf_1_1Time.php">Time</a>               m_duration; </div>
<div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;    std::vector&lt;Int16&gt; m_samples;  </div>
<div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;    <a class="code" href="classsf_1_1Mutex.php">Mutex</a>              m_mutex;    </div>
<div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;};</div>
<div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;</div>
<div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;</div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;</div>
<div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;<span class="preprocessor">#endif // SFML_MUSIC_HPP</span></div>
<div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;</div>
<div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;</div>
<div class="ttc" id="structsf_1_1SoundStream_1_1Chunk_php"><div class="ttname"><a href="structsf_1_1SoundStream_1_1Chunk.php">sf::SoundStream::Chunk</a></div><div class="ttdoc">Structure defining a chunk of audio data to stream. </div><div class="ttdef"><b>Definition:</b> <a href="SoundStream_8hpp_source.php#l00053">SoundStream.hpp:53</a></div></div>
<div class="ttc" id="classsf_1_1InputStream_php"><div class="ttname"><a href="classsf_1_1InputStream.php">sf::InputStream</a></div><div class="ttdoc">Abstract class for custom file input streams. </div><div class="ttdef"><b>Definition:</b> <a href="InputStream_8hpp_source.php#l00041">InputStream.hpp:41</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Time_php"><div class="ttname"><a href="classsf_1_1Time.php">sf::Time</a></div><div class="ttdoc">Represents a time value. </div><div class="ttdef"><b>Definition:</b> <a href="Time_8hpp_source.php#l00040">Time.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1Mutex_php"><div class="ttname"><a href="classsf_1_1Mutex.php">sf::Mutex</a></div><div class="ttdoc">Blocks concurrent access to shared resources from multiple threads. </div><div class="ttdef"><b>Definition:</b> <a href="Mutex_8hpp_source.php#l00047">Mutex.hpp:47</a></div></div>
<div class="ttc" id="classsf_1_1SoundStream_php"><div class="ttname"><a href="classsf_1_1SoundStream.php">sf::SoundStream</a></div><div class="ttdoc">Abstract base class for streamed audio sources. </div><div class="ttdef"><b>Definition:</b> <a href="SoundStream_8hpp_source.php#l00045">SoundStream.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1InputSoundFile_php"><div class="ttname"><a href="classsf_1_1InputSoundFile.php">sf::InputSoundFile</a></div><div class="ttdoc">Provide read access to sound files. </div><div class="ttdef"><b>Definition:</b> <a href="InputSoundFile_8hpp_source.php#l00046">InputSoundFile.hpp:46</a></div></div>
<div class="ttc" id="classsf_1_1Music_php"><div class="ttname"><a href="classsf_1_1Music.php">sf::Music</a></div><div class="ttdoc">Streamed music played from an audio file. </div><div class="ttdef"><b>Definition:</b> <a href="Music_8hpp_source.php#l00048">Music.hpp:48</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
