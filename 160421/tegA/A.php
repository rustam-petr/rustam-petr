<?php
/**
 * <a href="https://www.tut.by">tut</a>
 * Class A
 */
class A
{
    protected string $href;
    protected string $innerText;

    /**
     * @param string $href
     */
    public function setHref(string $href)
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param string $innerText
     */
    public function setInnerText(string $innerText)
    {
        $this->innerText = $innerText;
        return $this;
    }

    /**
     * @return string
     */
    public function html(): string
    {
        return "<a href='$this->href'>$this->innerText</a>";
    }
}