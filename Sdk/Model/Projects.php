<?php

/*
 * This file is part of the SensioLabsInsight package.
 *
 * (c) SensioLabs <contact@sensiolabs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SensioLabs\Insight\Sdk\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("projects")
 */
class Projects
{
    /**
     * @XmlAttribute
     * @Type("integer")
     */
    private $page;

    /**
     * @XmlAttribute
     * @Type("integer")
     */
    private $total;

    /**
     * @XmlAttribute
     * @Type("integer")
     */
    private $limit;

    /**
     * @Type("array<SensioLabs\Insight\Sdk\Model\Link>")
     * @XmlList(inline = true, entry = "link")
     */
    private $links;

    /**
     * @Type("array<SensioLabs\Insight\Sdk\Model\Project>")
     * @XmlList(inline = true, entry = "project")
     */
    private $projects;

    public function getPage()
    {
        return $this->page;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function getLinks()
    {
        return $this->links;
    }

    public function getProjects()
    {
        return $this->projects;
    }

}
