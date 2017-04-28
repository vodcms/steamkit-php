<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/steammessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgBase;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgBase.CGCMsgSQLStatsResponse
 */
class CGCMsgSQLStatsResponse extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * threads optional uint32 = 1
     *
     * @var int
     */
    protected $threads = null;

    /**
     * threads_connected optional uint32 = 2
     *
     * @var int
     */
    protected $threads_connected = null;

    /**
     * threads_active optional uint32 = 3
     *
     * @var int
     */
    protected $threads_active = null;

    /**
     * operations_submitted optional uint32 = 4
     *
     * @var int
     */
    protected $operations_submitted = null;

    /**
     * prepared_statements_executed optional uint32 = 5
     *
     * @var int
     */
    protected $prepared_statements_executed = null;

    /**
     * non_prepared_statements_executed optional uint32 = 6
     *
     * @var int
     */
    protected $non_prepared_statements_executed = null;

    /**
     * deadlock_retries optional uint32 = 7
     *
     * @var int
     */
    protected $deadlock_retries = null;

    /**
     * operations_timed_out_in_queue optional uint32 = 8
     *
     * @var int
     */
    protected $operations_timed_out_in_queue = null;

    /**
     * errors optional uint32 = 9
     *
     * @var int
     */
    protected $errors = null;

    /**
     * Check if 'threads' has a value
     *
     * @return bool
     */
    public function hasThreads()
    {
        return $this->threads !== null;
    }

    /**
     * Get 'threads' value
     *
     * @return int
     */
    public function getThreads()
    {
        return $this->threads;
    }

    /**
     * Set 'threads' value
     *
     * @param int $value
     */
    public function setThreads($value = null)
    {
        $this->threads = $value;
    }

    /**
     * Check if 'threads_connected' has a value
     *
     * @return bool
     */
    public function hasThreadsConnected()
    {
        return $this->threads_connected !== null;
    }

    /**
     * Get 'threads_connected' value
     *
     * @return int
     */
    public function getThreadsConnected()
    {
        return $this->threads_connected;
    }

    /**
     * Set 'threads_connected' value
     *
     * @param int $value
     */
    public function setThreadsConnected($value = null)
    {
        $this->threads_connected = $value;
    }

    /**
     * Check if 'threads_active' has a value
     *
     * @return bool
     */
    public function hasThreadsActive()
    {
        return $this->threads_active !== null;
    }

    /**
     * Get 'threads_active' value
     *
     * @return int
     */
    public function getThreadsActive()
    {
        return $this->threads_active;
    }

    /**
     * Set 'threads_active' value
     *
     * @param int $value
     */
    public function setThreadsActive($value = null)
    {
        $this->threads_active = $value;
    }

    /**
     * Check if 'operations_submitted' has a value
     *
     * @return bool
     */
    public function hasOperationsSubmitted()
    {
        return $this->operations_submitted !== null;
    }

    /**
     * Get 'operations_submitted' value
     *
     * @return int
     */
    public function getOperationsSubmitted()
    {
        return $this->operations_submitted;
    }

    /**
     * Set 'operations_submitted' value
     *
     * @param int $value
     */
    public function setOperationsSubmitted($value = null)
    {
        $this->operations_submitted = $value;
    }

    /**
     * Check if 'prepared_statements_executed' has a value
     *
     * @return bool
     */
    public function hasPreparedStatementsExecuted()
    {
        return $this->prepared_statements_executed !== null;
    }

    /**
     * Get 'prepared_statements_executed' value
     *
     * @return int
     */
    public function getPreparedStatementsExecuted()
    {
        return $this->prepared_statements_executed;
    }

    /**
     * Set 'prepared_statements_executed' value
     *
     * @param int $value
     */
    public function setPreparedStatementsExecuted($value = null)
    {
        $this->prepared_statements_executed = $value;
    }

    /**
     * Check if 'non_prepared_statements_executed' has a value
     *
     * @return bool
     */
    public function hasNonPreparedStatementsExecuted()
    {
        return $this->non_prepared_statements_executed !== null;
    }

    /**
     * Get 'non_prepared_statements_executed' value
     *
     * @return int
     */
    public function getNonPreparedStatementsExecuted()
    {
        return $this->non_prepared_statements_executed;
    }

    /**
     * Set 'non_prepared_statements_executed' value
     *
     * @param int $value
     */
    public function setNonPreparedStatementsExecuted($value = null)
    {
        $this->non_prepared_statements_executed = $value;
    }

    /**
     * Check if 'deadlock_retries' has a value
     *
     * @return bool
     */
    public function hasDeadlockRetries()
    {
        return $this->deadlock_retries !== null;
    }

    /**
     * Get 'deadlock_retries' value
     *
     * @return int
     */
    public function getDeadlockRetries()
    {
        return $this->deadlock_retries;
    }

    /**
     * Set 'deadlock_retries' value
     *
     * @param int $value
     */
    public function setDeadlockRetries($value = null)
    {
        $this->deadlock_retries = $value;
    }

    /**
     * Check if 'operations_timed_out_in_queue' has a value
     *
     * @return bool
     */
    public function hasOperationsTimedOutInQueue()
    {
        return $this->operations_timed_out_in_queue !== null;
    }

    /**
     * Get 'operations_timed_out_in_queue' value
     *
     * @return int
     */
    public function getOperationsTimedOutInQueue()
    {
        return $this->operations_timed_out_in_queue;
    }

    /**
     * Set 'operations_timed_out_in_queue' value
     *
     * @param int $value
     */
    public function setOperationsTimedOutInQueue($value = null)
    {
        $this->operations_timed_out_in_queue = $value;
    }

    /**
     * Check if 'errors' has a value
     *
     * @return bool
     */
    public function hasErrors()
    {
        return $this->errors !== null;
    }

    /**
     * Get 'errors' value
     *
     * @return int
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Set 'errors' value
     *
     * @param int $value
     */
    public function setErrors($value = null)
    {
        $this->errors = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'threads' => null,
            'threads_connected' => null,
            'threads_active' => null,
            'operations_submitted' => null,
            'prepared_statements_executed' => null,
            'non_prepared_statements_executed' => null,
            'deadlock_retries' => null,
            'operations_timed_out_in_queue' => null,
            'errors' => null
        ], $values);

        $message->setThreads($values['threads']);
        $message->setThreadsConnected($values['threads_connected']);
        $message->setThreadsActive($values['threads_active']);
        $message->setOperationsSubmitted($values['operations_submitted']);
        $message->setPreparedStatementsExecuted($values['prepared_statements_executed']);
        $message->setNonPreparedStatementsExecuted($values['non_prepared_statements_executed']);
        $message->setDeadlockRetries($values['deadlock_retries']);
        $message->setOperationsTimedOutInQueue($values['operations_timed_out_in_queue']);
        $message->setErrors($values['errors']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CGCMsgSQLStatsResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'threads',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'threads_connected',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'threads_active',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'operations_submitted',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'prepared_statements_executed',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'non_prepared_statements_executed',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'deadlock_retries',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'operations_timed_out_in_queue',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'errors',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->threads !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->threads);
        }

        if ($this->threads_connected !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->threads_connected);
        }

        if ($this->threads_active !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->threads_active);
        }

        if ($this->operations_submitted !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->operations_submitted);
        }

        if ($this->prepared_statements_executed !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->prepared_statements_executed);
        }

        if ($this->non_prepared_statements_executed !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->non_prepared_statements_executed);
        }

        if ($this->deadlock_retries !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->deadlock_retries);
        }

        if ($this->operations_timed_out_in_queue !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->operations_timed_out_in_queue);
        }

        if ($this->errors !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->errors);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->threads = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->threads_connected = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->threads_active = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->operations_submitted = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->prepared_statements_executed = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->non_prepared_statements_executed = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->deadlock_retries = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->operations_timed_out_in_queue = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->errors = $reader->readVarint($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->threads !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->threads);
        }

        if ($this->threads_connected !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->threads_connected);
        }

        if ($this->threads_active !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->threads_active);
        }

        if ($this->operations_submitted !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->operations_submitted);
        }

        if ($this->prepared_statements_executed !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->prepared_statements_executed);
        }

        if ($this->non_prepared_statements_executed !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->non_prepared_statements_executed);
        }

        if ($this->deadlock_retries !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->deadlock_retries);
        }

        if ($this->operations_timed_out_in_queue !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->operations_timed_out_in_queue);
        }

        if ($this->errors !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->errors);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->threads = null;
        $this->threads_connected = null;
        $this->threads_active = null;
        $this->operations_submitted = null;
        $this->prepared_statements_executed = null;
        $this->non_prepared_statements_executed = null;
        $this->deadlock_retries = null;
        $this->operations_timed_out_in_queue = null;
        $this->errors = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgBase\CGCMsgSQLStatsResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->threads = ($message->threads !== null) ? $message->threads : $this->threads;
        $this->threads_connected = ($message->threads_connected !== null) ? $message->threads_connected : $this->threads_connected;
        $this->threads_active = ($message->threads_active !== null) ? $message->threads_active : $this->threads_active;
        $this->operations_submitted = ($message->operations_submitted !== null) ? $message->operations_submitted : $this->operations_submitted;
        $this->prepared_statements_executed = ($message->prepared_statements_executed !== null) ? $message->prepared_statements_executed : $this->prepared_statements_executed;
        $this->non_prepared_statements_executed = ($message->non_prepared_statements_executed !== null) ? $message->non_prepared_statements_executed : $this->non_prepared_statements_executed;
        $this->deadlock_retries = ($message->deadlock_retries !== null) ? $message->deadlock_retries : $this->deadlock_retries;
        $this->operations_timed_out_in_queue = ($message->operations_timed_out_in_queue !== null) ? $message->operations_timed_out_in_queue : $this->operations_timed_out_in_queue;
        $this->errors = ($message->errors !== null) ? $message->errors : $this->errors;
    }


}

