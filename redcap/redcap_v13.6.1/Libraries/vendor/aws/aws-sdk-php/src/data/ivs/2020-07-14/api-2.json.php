<?php
// This file was auto-generated from sdk-root/src/data/ivs/2020-07-14/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-07-14', 'endpointPrefix' => 'ivs', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'Amazon IVS', 'serviceFullName' => 'Amazon Interactive Video Service', 'serviceId' => 'ivs', 'signatureVersion' => 'v4', 'signingName' => 'ivs', 'uid' => 'ivs-2020-07-14', ], 'operations' => [ 'BatchGetChannel' => [ 'name' => 'BatchGetChannel', 'http' => [ 'method' => 'POST', 'requestUri' => '/BatchGetChannel', 'responseCode' => 200, ], 'input' => [ 'shape' => 'BatchGetChannelRequest', ], 'output' => [ 'shape' => 'BatchGetChannelResponse', ], ], 'BatchGetStreamKey' => [ 'name' => 'BatchGetStreamKey', 'http' => [ 'method' => 'POST', 'requestUri' => '/BatchGetStreamKey', 'responseCode' => 200, ], 'input' => [ 'shape' => 'BatchGetStreamKeyRequest', ], 'output' => [ 'shape' => 'BatchGetStreamKeyResponse', ], ], 'CreateChannel' => [ 'name' => 'CreateChannel', 'http' => [ 'method' => 'POST', 'requestUri' => '/CreateChannel', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateChannelRequest', ], 'output' => [ 'shape' => 'CreateChannelResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'PendingVerification', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'CreateRecordingConfiguration' => [ 'name' => 'CreateRecordingConfiguration', 'http' => [ 'method' => 'POST', 'requestUri' => '/CreateRecordingConfiguration', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateRecordingConfigurationRequest', ], 'output' => [ 'shape' => 'CreateRecordingConfigurationResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'PendingVerification', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'CreateStreamKey' => [ 'name' => 'CreateStreamKey', 'http' => [ 'method' => 'POST', 'requestUri' => '/CreateStreamKey', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateStreamKeyRequest', ], 'output' => [ 'shape' => 'CreateStreamKeyResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'PendingVerification', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'DeleteChannel' => [ 'name' => 'DeleteChannel', 'http' => [ 'method' => 'POST', 'requestUri' => '/DeleteChannel', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteChannelRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'PendingVerification', ], [ 'shape' => 'ConflictException', ], ], ], 'DeletePlaybackKeyPair' => [ 'name' => 'DeletePlaybackKeyPair', 'http' => [ 'method' => 'POST', 'requestUri' => '/DeletePlaybackKeyPair', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeletePlaybackKeyPairRequest', ], 'output' => [ 'shape' => 'DeletePlaybackKeyPairResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'PendingVerification', ], ], ], 'DeleteRecordingConfiguration' => [ 'name' => 'DeleteRecordingConfiguration', 'http' => [ 'method' => 'POST', 'requestUri' => '/DeleteRecordingConfiguration', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteRecordingConfigurationRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], ], ], 'DeleteStreamKey' => [ 'name' => 'DeleteStreamKey', 'http' => [ 'method' => 'POST', 'requestUri' => '/DeleteStreamKey', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteStreamKeyRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'PendingVerification', ], ], ], 'GetChannel' => [ 'name' => 'GetChannel', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetChannel', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetChannelRequest', ], 'output' => [ 'shape' => 'GetChannelResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], ], ], 'GetPlaybackKeyPair' => [ 'name' => 'GetPlaybackKeyPair', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetPlaybackKeyPair', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetPlaybackKeyPairRequest', ], 'output' => [ 'shape' => 'GetPlaybackKeyPairResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], ], ], 'GetRecordingConfiguration' => [ 'name' => 'GetRecordingConfiguration', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetRecordingConfiguration', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetRecordingConfigurationRequest', ], 'output' => [ 'shape' => 'GetRecordingConfigurationResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], ], ], 'GetStream' => [ 'name' => 'GetStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetStream', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetStreamRequest', ], 'output' => [ 'shape' => 'GetStreamResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ChannelNotBroadcasting', ], ], ], 'GetStreamKey' => [ 'name' => 'GetStreamKey', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetStreamKey', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetStreamKeyRequest', ], 'output' => [ 'shape' => 'GetStreamKeyResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], ], ], 'GetStreamSession' => [ 'name' => 'GetStreamSession', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetStreamSession', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetStreamSessionRequest', ], 'output' => [ 'shape' => 'GetStreamSessionResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], ], ], 'ImportPlaybackKeyPair' => [ 'name' => 'ImportPlaybackKeyPair', 'http' => [ 'method' => 'POST', 'requestUri' => '/ImportPlaybackKeyPair', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ImportPlaybackKeyPairRequest', ], 'output' => [ 'shape' => 'ImportPlaybackKeyPairResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'PendingVerification', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'ListChannels' => [ 'name' => 'ListChannels', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListChannels', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListChannelsRequest', ], 'output' => [ 'shape' => 'ListChannelsResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], ], ], 'ListPlaybackKeyPairs' => [ 'name' => 'ListPlaybackKeyPairs', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListPlaybackKeyPairs', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListPlaybackKeyPairsRequest', ], 'output' => [ 'shape' => 'ListPlaybackKeyPairsResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListRecordingConfigurations' => [ 'name' => 'ListRecordingConfigurations', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListRecordingConfigurations', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListRecordingConfigurationsRequest', ], 'output' => [ 'shape' => 'ListRecordingConfigurationsResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListStreamKeys' => [ 'name' => 'ListStreamKeys', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListStreamKeys', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListStreamKeysRequest', ], 'output' => [ 'shape' => 'ListStreamKeysResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListStreamSessions' => [ 'name' => 'ListStreamSessions', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListStreamSessions', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListStreamSessionsRequest', ], 'output' => [ 'shape' => 'ListStreamSessionsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListStreams' => [ 'name' => 'ListStreams', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListStreams', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListStreamsRequest', ], 'output' => [ 'shape' => 'ListStreamsResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], ], ], 'PutMetadata' => [ 'name' => 'PutMetadata', 'http' => [ 'method' => 'POST', 'requestUri' => '/PutMetadata', 'responseCode' => 200, ], 'input' => [ 'shape' => 'PutMetadataRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ChannelNotBroadcasting', ], [ 'shape' => 'ThrottlingException', ], ], ], 'StopStream' => [ 'name' => 'StopStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/StopStream', 'responseCode' => 200, ], 'input' => [ 'shape' => 'StopStreamRequest', ], 'output' => [ 'shape' => 'StopStreamResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ChannelNotBroadcasting', ], [ 'shape' => 'StreamUnavailable', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], ], 'idempotent' => true, ], 'UpdateChannel' => [ 'name' => 'UpdateChannel', 'http' => [ 'method' => 'POST', 'requestUri' => '/UpdateChannel', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateChannelRequest', ], 'output' => [ 'shape' => 'UpdateChannelResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'PendingVerification', ], [ 'shape' => 'ConflictException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AudioConfiguration' => [ 'type' => 'structure', 'members' => [ 'channels' => [ 'shape' => 'Integer', ], 'codec' => [ 'shape' => 'String', ], 'sampleRate' => [ 'shape' => 'Integer', ], 'targetBitrate' => [ 'shape' => 'Integer', ], ], ], 'BatchError' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'ResourceArn', ], 'code' => [ 'shape' => 'errorCode', ], 'message' => [ 'shape' => 'errorMessage', ], ], ], 'BatchErrors' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchError', ], ], 'BatchGetChannelRequest' => [ 'type' => 'structure', 'required' => [ 'arns', ], 'members' => [ 'arns' => [ 'shape' => 'ChannelArnList', ], ], ], 'BatchGetChannelResponse' => [ 'type' => 'structure', 'members' => [ 'channels' => [ 'shape' => 'Channels', ], 'errors' => [ 'shape' => 'BatchErrors', ], ], ], 'BatchGetStreamKeyRequest' => [ 'type' => 'structure', 'required' => [ 'arns', ], 'members' => [ 'arns' => [ 'shape' => 'StreamKeyArnList', ], ], ], 'BatchGetStreamKeyResponse' => [ 'type' => 'structure', 'members' => [ 'errors' => [ 'shape' => 'BatchErrors', ], 'streamKeys' => [ 'shape' => 'StreamKeys', ], ], ], 'Boolean' => [ 'type' => 'boolean', ], 'Channel' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'ChannelArn', ], 'authorized' => [ 'shape' => 'IsAuthorized', ], 'ingestEndpoint' => [ 'shape' => 'IngestEndpoint', ], 'insecureIngest' => [ 'shape' => 'InsecureIngest', ], 'latencyMode' => [ 'shape' => 'ChannelLatencyMode', ], 'name' => [ 'shape' => 'ChannelName', ], 'playbackUrl' => [ 'shape' => 'PlaybackURL', ], 'recordingConfigurationArn' => [ 'shape' => 'ChannelRecordingConfigurationArn', ], 'tags' => [ 'shape' => 'Tags', ], 'type' => [ 'shape' => 'ChannelType', ], ], ], 'ChannelArn' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^arn:aws:[is]vs:[a-z0-9-]+:[0-9]+:channel/[a-zA-Z0-9-]+$', ], 'ChannelArnList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChannelArn', ], 'max' => 50, 'min' => 1, ], 'ChannelLatencyMode' => [ 'type' => 'string', 'enum' => [ 'NORMAL', 'LOW', ], ], 'ChannelList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChannelSummary', ], ], 'ChannelName' => [ 'type' => 'string', 'max' => 128, 'min' => 0, 'pattern' => '^[a-zA-Z0-9-_]*$', ], 'ChannelNotBroadcasting' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ChannelRecordingConfigurationArn' => [ 'type' => 'string', 'max' => 128, 'min' => 0, 'pattern' => '^$|^arn:aws:ivs:[a-z0-9-]+:[0-9]+:recording-configuration/[a-zA-Z0-9-]+$', ], 'ChannelSummary' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'ChannelArn', ], 'authorized' => [ 'shape' => 'IsAuthorized', ], 'insecureIngest' => [ 'shape' => 'InsecureIngest', ], 'latencyMode' => [ 'shape' => 'ChannelLatencyMode', ], 'name' => [ 'shape' => 'ChannelName', ], 'recordingConfigurationArn' => [ 'shape' => 'ChannelRecordingConfigurationArn', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'ChannelType' => [ 'type' => 'string', 'enum' => [ 'BASIC', 'STANDARD', ], ], 'Channels' => [ 'type' => 'list', 'member' => [ 'shape' => 'Channel', ], ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CreateChannelRequest' => [ 'type' => 'structure', 'members' => [ 'authorized' => [ 'shape' => 'Boolean', ], 'insecureIngest' => [ 'shape' => 'Boolean', ], 'latencyMode' => [ 'shape' => 'ChannelLatencyMode', ], 'name' => [ 'shape' => 'ChannelName', ], 'recordingConfigurationArn' => [ 'shape' => 'ChannelRecordingConfigurationArn', ], 'tags' => [ 'shape' => 'Tags', ], 'type' => [ 'shape' => 'ChannelType', ], ], ], 'CreateChannelResponse' => [ 'type' => 'structure', 'members' => [ 'channel' => [ 'shape' => 'Channel', ], 'streamKey' => [ 'shape' => 'StreamKey', ], ], ], 'CreateRecordingConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'destinationConfiguration', ], 'members' => [ 'destinationConfiguration' => [ 'shape' => 'DestinationConfiguration', ], 'name' => [ 'shape' => 'RecordingConfigurationName', ], 'recordingReconnectWindowSeconds' => [ 'shape' => 'RecordingReconnectWindowSeconds', ], 'tags' => [ 'shape' => 'Tags', ], 'thumbnailConfiguration' => [ 'shape' => 'ThumbnailConfiguration', ], ], ], 'CreateRecordingConfigurationResponse' => [ 'type' => 'structure', 'members' => [ 'recordingConfiguration' => [ 'shape' => 'RecordingConfiguration', ], ], ], 'CreateStreamKeyRequest' => [ 'type' => 'structure', 'required' => [ 'channelArn', ], 'members' => [ 'channelArn' => [ 'shape' => 'ChannelArn', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'CreateStreamKeyResponse' => [ 'type' => 'structure', 'members' => [ 'streamKey' => [ 'shape' => 'StreamKey', ], ], ], 'DeleteChannelRequest' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'arn' => [ 'shape' => 'ChannelArn', ], ], ], 'DeletePlaybackKeyPairRequest' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'arn' => [ 'shape' => 'PlaybackKeyPairArn', ], ], ], 'DeletePlaybackKeyPairResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteRecordingConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'arn' => [ 'shape' => 'RecordingConfigurationArn', ], ], ], 'DeleteStreamKeyRequest' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'arn' => [ 'shape' => 'StreamKeyArn', ], ], ], 'DestinationConfiguration' => [ 'type' => 'structure', 'members' => [ 's3' => [ 'shape' => 'S3DestinationConfiguration', ], ], ], 'GetChannelRequest' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'arn' => [ 'shape' => 'ChannelArn', ], ], ], 'GetChannelResponse' => [ 'type' => 'structure', 'members' => [ 'channel' => [ 'shape' => 'Channel', ], ], ], 'GetPlaybackKeyPairRequest' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'arn' => [ 'shape' => 'PlaybackKeyPairArn', ], ], ], 'GetPlaybackKeyPairResponse' => [ 'type' => 'structure', 'members' => [ 'keyPair' => [ 'shape' => 'PlaybackKeyPair', ], ], ], 'GetRecordingConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'arn' => [ 'shape' => 'RecordingConfigurationArn', ], ], ], 'GetRecordingConfigurationResponse' => [ 'type' => 'structure', 'members' => [ 'recordingConfiguration' => [ 'shape' => 'RecordingConfiguration', ], ], ], 'GetStreamKeyRequest' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'arn' => [ 'shape' => 'StreamKeyArn', ], ], ], 'GetStreamKeyResponse' => [ 'type' => 'structure', 'members' => [ 'streamKey' => [ 'shape' => 'StreamKey', ], ], ], 'GetStreamRequest' => [ 'type' => 'structure', 'required' => [ 'channelArn', ], 'members' => [ 'channelArn' => [ 'shape' => 'ChannelArn', ], ], ], 'GetStreamResponse' => [ 'type' => 'structure', 'members' => [ 'stream' => [ 'shape' => 'Stream', ], ], ], 'GetStreamSessionRequest' => [ 'type' => 'structure', 'required' => [ 'channelArn', ], 'members' => [ 'channelArn' => [ 'shape' => 'ChannelArn', ], 'streamId' => [ 'shape' => 'StreamId', ], ], ], 'GetStreamSessionResponse' => [ 'type' => 'structure', 'members' => [ 'streamSession' => [ 'shape' => 'StreamSession', ], ], ], 'ImportPlaybackKeyPairRequest' => [ 'type' => 'structure', 'required' => [ 'publicKeyMaterial', ], 'members' => [ 'name' => [ 'shape' => 'PlaybackKeyPairName', ], 'publicKeyMaterial' => [ 'shape' => 'PlaybackPublicKeyMaterial', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'ImportPlaybackKeyPairResponse' => [ 'type' => 'structure', 'members' => [ 'keyPair' => [ 'shape' => 'PlaybackKeyPair', ], ], ], 'IngestConfiguration' => [ 'type' => 'structure', 'members' => [ 'audio' => [ 'shape' => 'AudioConfiguration', ], 'video' => [ 'shape' => 'VideoConfiguration', ], ], ], 'IngestEndpoint' => [ 'type' => 'string', ], 'InsecureIngest' => [ 'type' => 'boolean', ], 'Integer' => [ 'type' => 'long', ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'IsAuthorized' => [ 'type' => 'boolean', ], 'ListChannelsRequest' => [ 'type' => 'structure', 'members' => [ 'filterByName' => [ 'shape' => 'ChannelName', ], 'filterByRecordingConfigurationArn' => [ 'shape' => 'ChannelRecordingConfigurationArn', ], 'maxResults' => [ 'shape' => 'MaxChannelResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListChannelsResponse' => [ 'type' => 'structure', 'required' => [ 'channels', ], 'members' => [ 'channels' => [ 'shape' => 'ChannelList', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListPlaybackKeyPairsRequest' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'MaxPlaybackKeyPairResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListPlaybackKeyPairsResponse' => [ 'type' => 'structure', 'required' => [ 'keyPairs', ], 'members' => [ 'keyPairs' => [ 'shape' => 'PlaybackKeyPairList', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListRecordingConfigurationsRequest' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'MaxRecordingConfigurationResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListRecordingConfigurationsResponse' => [ 'type' => 'structure', 'required' => [ 'recordingConfigurations', ], 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'recordingConfigurations' => [ 'shape' => 'RecordingConfigurationList', ], ], ], 'ListStreamKeysRequest' => [ 'type' => 'structure', 'required' => [ 'channelArn', ], 'members' => [ 'channelArn' => [ 'shape' => 'ChannelArn', ], 'maxResults' => [ 'shape' => 'MaxStreamKeyResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListStreamKeysResponse' => [ 'type' => 'structure', 'required' => [ 'streamKeys', ], 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'streamKeys' => [ 'shape' => 'StreamKeyList', ], ], ], 'ListStreamSessionsRequest' => [ 'type' => 'structure', 'required' => [ 'channelArn', ], 'members' => [ 'channelArn' => [ 'shape' => 'ChannelArn', ], 'maxResults' => [ 'shape' => 'MaxStreamResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListStreamSessionsResponse' => [ 'type' => 'structure', 'required' => [ 'streamSessions', ], 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'streamSessions' => [ 'shape' => 'StreamSessionList', ], ], ], 'ListStreamsRequest' => [ 'type' => 'structure', 'members' => [ 'filterBy' => [ 'shape' => 'StreamFilters', ], 'maxResults' => [ 'shape' => 'MaxStreamResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListStreamsResponse' => [ 'type' => 'structure', 'required' => [ 'streams', ], 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'streams' => [ 'shape' => 'StreamList', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'ResourceArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'required' => [ 'tags', ], 'members' => [ 'tags' => [ 'shape' => 'Tags', ], ], ], 'MaxChannelResults' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'MaxPlaybackKeyPairResults' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'MaxRecordingConfigurationResults' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'MaxStreamKeyResults' => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ], 'MaxStreamResults' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'PaginationToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 0, 'pattern' => '^[a-zA-Z0-9+/=_-]*$', ], 'PendingVerification' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'PlaybackKeyPair' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'PlaybackKeyPairArn', ], 'fingerprint' => [ 'shape' => 'PlaybackKeyPairFingerprint', ], 'name' => [ 'shape' => 'PlaybackKeyPairName', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'PlaybackKeyPairArn' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^arn:aws:[is]vs:[a-z0-9-]+:[0-9]+:playback-key/[a-zA-Z0-9-]+$', ], 'PlaybackKeyPairFingerprint' => [ 'type' => 'string', ], 'PlaybackKeyPairList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PlaybackKeyPairSummary', ], ], 'PlaybackKeyPairName' => [ 'type' => 'string', 'max' => 128, 'min' => 0, 'pattern' => '^[a-zA-Z0-9-_]*$', ], 'PlaybackKeyPairSummary' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'PlaybackKeyPairArn', ], 'name' => [ 'shape' => 'PlaybackKeyPairName', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'PlaybackPublicKeyMaterial' => [ 'type' => 'string', ], 'PlaybackURL' => [ 'type' => 'string', ], 'PutMetadataRequest' => [ 'type' => 'structure', 'required' => [ 'channelArn', 'metadata', ], 'members' => [ 'channelArn' => [ 'shape' => 'ChannelArn', ], 'metadata' => [ 'shape' => 'StreamMetadata', ], ], ], 'RecordingConfiguration' => [ 'type' => 'structure', 'required' => [ 'arn', 'destinationConfiguration', 'state', ], 'members' => [ 'arn' => [ 'shape' => 'RecordingConfigurationArn', ], 'destinationConfiguration' => [ 'shape' => 'DestinationConfiguration', ], 'name' => [ 'shape' => 'RecordingConfigurationName', ], 'recordingReconnectWindowSeconds' => [ 'shape' => 'RecordingReconnectWindowSeconds', ], 'state' => [ 'shape' => 'RecordingConfigurationState', ], 'tags' => [ 'shape' => 'Tags', ], 'thumbnailConfiguration' => [ 'shape' => 'ThumbnailConfiguration', ], ], ], 'RecordingConfigurationArn' => [ 'type' => 'string', 'max' => 128, 'min' => 0, 'pattern' => '^arn:aws:ivs:[a-z0-9-]+:[0-9]+:recording-configuration/[a-zA-Z0-9-]+$', ], 'RecordingConfigurationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecordingConfigurationSummary', ], ], 'RecordingConfigurationName' => [ 'type' => 'string', 'max' => 128, 'min' => 0, 'pattern' => '^[a-zA-Z0-9-_]*$', ], 'RecordingConfigurationState' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'CREATE_FAILED', 'ACTIVE', ], ], 'RecordingConfigurationSummary' => [ 'type' => 'structure', 'required' => [ 'arn', 'destinationConfiguration', 'state', ], 'members' => [ 'arn' => [ 'shape' => 'RecordingConfigurationArn', ], 'destinationConfiguration' => [ 'shape' => 'DestinationConfiguration', ], 'name' => [ 'shape' => 'RecordingConfigurationName', ], 'state' => [ 'shape' => 'RecordingConfigurationState', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'RecordingMode' => [ 'type' => 'string', 'enum' => [ 'DISABLED', 'INTERVAL', ], ], 'RecordingReconnectWindowSeconds' => [ 'type' => 'integer', 'max' => 300, 'min' => 0, ], 'ResourceArn' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^arn:aws:[is]vs:[a-z0-9-]+:[0-9]+:[a-z-]/[a-zA-Z0-9-]+$', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'S3DestinationBucketName' => [ 'type' => 'string', 'max' => 63, 'min' => 3, 'pattern' => '^[a-z0-9-.]+$', ], 'S3DestinationConfiguration' => [ 'type' => 'structure', 'required' => [ 'bucketName', ], 'members' => [ 'bucketName' => [ 'shape' => 'S3DestinationBucketName', ], ], ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 402, 'senderFault' => true, ], 'exception' => true, ], 'StopStreamRequest' => [ 'type' => 'structure', 'required' => [ 'channelArn', ], 'members' => [ 'channelArn' => [ 'shape' => 'ChannelArn', ], ], ], 'StopStreamResponse' => [ 'type' => 'structure', 'members' => [], ], 'Stream' => [ 'type' => 'structure', 'members' => [ 'channelArn' => [ 'shape' => 'ChannelArn', ], 'health' => [ 'shape' => 'StreamHealth', ], 'playbackUrl' => [ 'shape' => 'PlaybackURL', ], 'startTime' => [ 'shape' => 'StreamStartTime', ], 'state' => [ 'shape' => 'StreamState', ], 'streamId' => [ 'shape' => 'StreamId', ], 'viewerCount' => [ 'shape' => 'StreamViewerCount', ], ], ], 'StreamEvent' => [ 'type' => 'structure', 'members' => [ 'eventTime' => [ 'shape' => 'Time', ], 'name' => [ 'shape' => 'String', ], 'type' => [ 'shape' => 'String', ], ], ], 'StreamEvents' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamEvent', ], 'max' => 500, 'min' => 0, ], 'StreamFilters' => [ 'type' => 'structure', 'members' => [ 'health' => [ 'shape' => 'StreamHealth', ], ], ], 'StreamHealth' => [ 'type' => 'string', 'enum' => [ 'HEALTHY', 'STARVING', 'UNKNOWN', ], ], 'StreamId' => [ 'type' => 'string', 'max' => 26, 'min' => 26, 'pattern' => '^st-[a-zA-Z0-9]+$', ], 'StreamKey' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'StreamKeyArn', ], 'channelArn' => [ 'shape' => 'ChannelArn', ], 'tags' => [ 'shape' => 'Tags', ], 'value' => [ 'shape' => 'StreamKeyValue', ], ], ], 'StreamKeyArn' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^arn:aws:[is]vs:[a-z0-9-]+:[0-9]+:stream-key/[a-zA-Z0-9-]+$', ], 'StreamKeyArnList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamKeyArn', ], 'max' => 50, 'min' => 1, ], 'StreamKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamKeySummary', ], ], 'StreamKeySummary' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'StreamKeyArn', ], 'channelArn' => [ 'shape' => 'ChannelArn', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'StreamKeyValue' => [ 'type' => 'string', 'sensitive' => true, ], 'StreamKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamKey', ], ], 'StreamList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamSummary', ], ], 'StreamMetadata' => [ 'type' => 'string', 'min' => 1, 'sensitive' => true, ], 'StreamSession' => [ 'type' => 'structure', 'members' => [ 'channel' => [ 'shape' => 'Channel', ], 'endTime' => [ 'shape' => 'Time', ], 'ingestConfiguration' => [ 'shape' => 'IngestConfiguration', ], 'recordingConfiguration' => [ 'shape' => 'RecordingConfiguration', ], 'startTime' => [ 'shape' => 'Time', ], 'streamId' => [ 'shape' => 'StreamId', ], 'truncatedEvents' => [ 'shape' => 'StreamEvents', ], ], ], 'StreamSessionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamSessionSummary', ], ], 'StreamSessionSummary' => [ 'type' => 'structure', 'members' => [ 'endTime' => [ 'shape' => 'Time', ], 'hasErrorEvent' => [ 'shape' => 'Boolean', ], 'startTime' => [ 'shape' => 'Time', ], 'streamId' => [ 'shape' => 'StreamId', ], ], ], 'StreamStartTime' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], 'StreamState' => [ 'type' => 'string', 'enum' => [ 'LIVE', 'OFFLINE', ], ], 'StreamSummary' => [ 'type' => 'structure', 'members' => [ 'channelArn' => [ 'shape' => 'ChannelArn', ], 'health' => [ 'shape' => 'StreamHealth', ], 'startTime' => [ 'shape' => 'StreamStartTime', ], 'state' => [ 'shape' => 'StreamState', ], 'streamId' => [ 'shape' => 'StreamId', ], 'viewerCount' => [ 'shape' => 'StreamViewerCount', ], ], ], 'StreamUnavailable' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 503, ], 'exception' => true, 'fault' => true, ], 'StreamViewerCount' => [ 'type' => 'long', ], 'String' => [ 'type' => 'string', ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 50, 'min' => 0, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'ResourceArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'Tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 50, 'min' => 0, ], 'TargetIntervalSeconds' => [ 'type' => 'long', 'max' => 60, 'min' => 1, ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'ThumbnailConfiguration' => [ 'type' => 'structure', 'members' => [ 'recordingMode' => [ 'shape' => 'RecordingMode', ], 'targetIntervalSeconds' => [ 'shape' => 'TargetIntervalSeconds', ], ], ], 'Time' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'ResourceArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateChannelRequest' => [ 'type' => 'structure', 'required' => [ 'arn', ], 'members' => [ 'arn' => [ 'shape' => 'ChannelArn', ], 'authorized' => [ 'shape' => 'Boolean', ], 'insecureIngest' => [ 'shape' => 'Boolean', ], 'latencyMode' => [ 'shape' => 'ChannelLatencyMode', ], 'name' => [ 'shape' => 'ChannelName', ], 'recordingConfigurationArn' => [ 'shape' => 'ChannelRecordingConfigurationArn', ], 'type' => [ 'shape' => 'ChannelType', ], ], ], 'UpdateChannelResponse' => [ 'type' => 'structure', 'members' => [ 'channel' => [ 'shape' => 'Channel', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'exceptionMessage' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'VideoConfiguration' => [ 'type' => 'structure', 'members' => [ 'avcLevel' => [ 'shape' => 'String', ], 'avcProfile' => [ 'shape' => 'String', ], 'codec' => [ 'shape' => 'String', ], 'encoder' => [ 'shape' => 'String', ], 'targetBitrate' => [ 'shape' => 'Integer', ], 'targetFramerate' => [ 'shape' => 'Integer', ], 'videoHeight' => [ 'shape' => 'Integer', ], 'videoWidth' => [ 'shape' => 'Integer', ], ], ], 'errorCode' => [ 'type' => 'string', ], 'errorMessage' => [ 'type' => 'string', ], ],];
